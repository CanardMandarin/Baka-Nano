<template>
  <section class="config">
    <div class="container">
      <div class="config__sidebar">
        <p>The answer will be in : <b>{{ language.name }}</b></p>
        <p>The answer will be shown after : <b>{{ timer }} Sec</b></p>
        <p>Kanji :
          <b v-if="level.description"> {{ level.description }} </b>
          <b v-if="level.kanji"> {{ level.kanji }} </b>
        </p>
      </div>
      <div class="config__block">
        <p>
          Language : <br />
          <v-select v-model="language" label="name" :options="languages"></v-select>
        </p>
        <p>
          Timer : <br />
          <b-input type="search" icon="clock" v-model="timer"></b-input>
        </p>
        <p>
          Level : <br />
          <ul class="config__levels">
            <li v-for="l in levels" :key="l.id" @click="pickLevel(l)"><span :class="{'active': l.number <= level.number }">{{l.number}}</span></li>
          </ul>
        </p>
      </div>
      <div class="start">
        <a @click="start()">START</a>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  metaInfo: {
    title: 'Baka nano ?! - Configuration'
  },
  data () {
    return { }
  },
  computed: {
    timer: {
      set (v) {
        if (!v || Number.isInteger(v)) return
        v = parseInt(v)
        this.setTimer(v * 1000)
      },
      get () {
        return this.getTimer / 1000
      }
    },
    language: {
      set (v) {
        this.setLanguage(v)
      },
      get () {
        return this.getLanguage
      }
    },
    level: {
      set (v) {
        this.setLevel(v)
      },
      get () {
        return this.getLevel
      }
    },
    ...mapGetters('app', {
      languages: 'getLanguages',
      levels: 'getLevels',
      sentences: 'getSentences',
      getLanguage: 'getLanguage',
      getTimer: 'getTimer',
      getLevel: 'getLevel'
    })
  },
  methods: {
    pickLevel (level) {
      this.level = level
    },
    start () {
      this.loadSentences().then((length) => {
        if (length === 0) {
          return this.$swal({
            type: 'error',
            title: 'Oops...',
            text: 'There are no sentences available for the language you picked (⁎˃ᆺ˂)'
          })
        }

        if (length < 50) {
          return this.$swal({
            title: 'Do you want to continue ?',
            text: `There are only ${length} sentences for the language you picked (ு⁎ு)྆྆`,
            type: 'warning',
            showCancelButton: true
          }).then((result) => {
            if (result.value) {
              this.launch()
            }
          })
        }

        this.launch()
      })
    },
    launch () {
      // Todo
      this.$router.push({ path: '/play' })
    },
    ...mapActions('app', ['loadLanguages', 'setLanguage', 'loadLevels', 'setTimer', 'setLevel', 'loadSentences', 'reset'])
  },
  created () {
    this.reset()
    this.loadLanguages()
    this.loadLevels()
  }
}
</script>
<style lang="scss" rel="stylesheet/sass" scoped>
  @import "../assets/scss/variables";

  input {
    width: auto!important;
    display:none;
  }

  .container {
    align-items: center;
  }

  .dropdown {
    display: block;
  }

  .config {
    &__sidebar {
      flex: 0 1 50%;
      padding: 0 20px;
      height: auto;
    }

    &__block {
      flex: 1 0 50%;
      padding: 0 20px;
      height: auto;
    }

    &__levels {
      display: flex;
      flex-wrap: wrap;
      max-width: 370px;
      width: auto;
      margin: 0;
      padding: 0;

      li {
        flex: 1 0 10%;
        text-align: center;
        margin-top: 10px;
        cursor: pointer;

        span {
          display: inline-block;
          border: 1px solid $grey-dark;
          height: 25px;
          width: 25px;
          line-height: 25px;

          &.active {
            background: $grey-dark;
            color: #ffffff;
          }
        }
      }
    }
  }
</style>
