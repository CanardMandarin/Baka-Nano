<template>
  <section class="game">
    <div class="container">
      <div class="game__sentence">
        <h1>
          <v-runtime-template :template="withKanji()"/>
        </h1>
        <h2>
          <transition name="fade">
            <span v-if="showResult">
              {{sentence.translations[0].sentence}}
            </span>
          </transition>
        </h2>
      </div>
    </div>
    <div class="game__actions">
      <a @click="copyInput()"><b-icon icon="content-copy"></b-icon></a>
      <a @click="arrowLast()"><b-icon icon="arrow-left-thick"></b-icon></a>
      <a @click="arrowNext()"><b-icon icon="arrow-right-thick"></b-icon></a>
      <a @click="speak()"><b-icon icon="volume-high"></b-icon></a>
    </div>
    <div v-if="shortcuts" class="game__shortcuts">
      <a @click="hideShortcuts()" class="close"><b-icon size="is-medium" icon="close"></b-icon></a>

      <h3>Keyboard shortcuts</h3>
      <ul>
        <li>
          <div class='keycap'><div class='keycap__inner'>⟶</div></div>
          <span>Show answer or switch to next sentence</span>
        </li>
        <li>
          <div class='keycap'><div class='keycap__inner'>S</div></div>
          <span>Play sound</span>
        </li>
        <li>
          <div class='keycap'><div class='keycap__inner'>C</div></div>
          <span>Copy sentence</span>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import Kanji                      from '@/components/Kanji'
import VRuntimeTemplate           from 'v-runtime-template'

export default {
  metaInfo: {
    title: 'Baka nano ?! - Play'
  },
  components: {
    Kanji,
    VRuntimeTemplate
  },
  data () {
    return {
      position: 0,
      showResult: false,
      audio: '',
      shortcuts: true
    }
  },
  computed: {
    sentence: {
      get () {
        return this.sentences[this.position]
      }
    },
    ...mapGetters('app', {
      sentences: 'getSentences',
      timer: 'getTimer'
    })
  },
  methods: {
    hideShortcuts () {
      this.shortcuts = false
    },
    keyHandler (event) {
      if (event.which === 37) return this.arrowLast()
      if (event.which === 39) return this.arrowNext()
      if (event.which === 67) return this.copyInput()
      if (event.which === 83) return this.speak()
    },
    speak () {
      if (this.lastPlayed === this.sentence.id) return new Audio('data:audio/mp3;base64,' + this.audio).play()

      this.speakSentence(this.sentence.id).then((response) => {
        this.audio = response.data.data.audio
        new Audio('data:audio/mp3;base64,' + this.audio).play()
        this.lastPlayed = this.sentence.id
      })
    },
    withKanji () {
      if (this.sentence.sentence === undefined) return

      let match
      let re = /([一-龯])/g
      let sentence = this.sentence.sentence
      let str = sentence
      let found = []
      while ((match = re.exec(this.sentences[this.position].sentence)) != null) {
        let kanji = sentence.charAt(match.index)
        if (found.indexOf(kanji.toLowerCase()) > -1) continue
        found.push(kanji)

        let re = new RegExp(kanji, 'g')
        str = str.replace(re, `<Kanji kanji="${kanji}"/>`)
      }

      return `<span>${str}</span>`
    },
    arrowNext () {
      if (this.showResult) return this.next()
      this.showResult = true
    },
    arrowLast () {
      if (this.position === 0) return false
      this.position -= 1
      this.showResult = true
    },
    next () {
      if (this.position === this.sentences.length - 1) this.position = -1
      this.showResult = false
      this.position += 1
      let old = this.position

      this.sleep(this.timer).then(() => {
        console.log()
        if (this.position === old) {
          this.showResult = true
        }
      })
    },
    copyInput () {
      this.$copyText(this.sentence.setnence).then(() => {
        this.$toast.open({
          message: 'Sentence copied ;)',
          type: 'is-success'
        })
      }, () => {
        this.$toast.open({
          message: 'Can\'t copy sentence :(',
          type: 'is-danger'
        })
      })
    },
    sleep (duration) {
      return new Promise((resolve, reject) => {
        setTimeout(() => { resolve(0) }, duration)
      })
    },
    ...mapActions('app', ['speakSentence'])
  },
  created () {
    window.addEventListener('keyup', this.keyHandler)
  },
  mounted () {
    this.next()
  }
}
</script>
