<template>
  <span class="kanji" v-tippy="{ html: '#' + id, interactive : true, theme : 'light' }">
    {{kanji}}
    <div :id="id" class="is-hidden">
      <template v-if="kanjiData">
      <h3><b>{{kanjiData.meaning}}</b></h3>
      <ul>
        <li>Onyomi: <span>{{kanjiData.onyomi}}</span></li>
        <li>Kunyomi: <span>{{kanjiData.kunyomi}}</span></li>
      </ul>
      </template>
    </div>
  </span>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  props: {
    kanji: String,
    furigana: String
  },
  data () {
    return {
      'id': 'kanji-' + parseInt(Math.random() * 1000)
    }
  },
  watch: {
    kanjiData () {
      this.id = 'kanji-' + parseInt(Math.random() * 1000)
    }
  },
  computed: {
    kanjiData () {
      return this.getKanji(this.kanji)
    },
    ...mapGetters('app', ['getKanji'])
  },
  methods: {
    ...mapActions('app', ['loadKanji'])
  },
  created () {
    if (!this.kanjiData) {
      this.loadKanji(this.kanji)
    }
  }
}
</script>
<style lang="scss" rel="stylesheet/sass">

</style>
