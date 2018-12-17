import _              from 'underscore'
import axios          from '@/axios.js'

export default {
  state: () => ({
    languages             : [],
    levels                : [],
    sentences             : [],
    kanjis                : [],
    // Configuration necessary :
    timer                 : 5000,
    language              : { id: 1, code: 'eng', name: 'English' },
    level                 : { id: 50, number: 0, name: 'Level 0', description: 'No kanji, only hiragana & katakana', 'kanji':null }
  }),

  getters: {
    getLanguages          : state => state.languages,
    getLevels             : state => state.levels,
    getSentences          : state => state.sentences,
    getKanjis             : state => state.kanjis,
    getKanji              : state => kanji => _.find(state.kanjis, (k) => { return k.kanji === kanji }),

    getTimer              : state => state.timer,
    getLanguage           : state => state.language,
    getLevel              : state => state.level
  },

  actions: {
    loadLanguages (context) {
      axios.get('/languages').then((response) => {
        context.commit('LOAD_LANGUAGES', response.data.data)
      })
    },

    setLanguage (context, o) {
      context.commit('SET_LANGUAGE', o)
    },

    loadLevels (context) {
      axios.get('/levels').then((response) => {
        context.commit('LOAD_LEVELS', response.data.data)
      })
    },

    loadSentences (context, o) {
      return axios.get(`/sentences/${context.state.level.id}/${context.state.language.id}`).then((response) => {
        context.commit('LOAD_SENTENCES', response.data.data)
        return response.data.data.length
      })
    },

    loadKanji (context, kanji) {
      axios.get(`/kanji/${kanji}`).then((response) => {
        context.commit('ADD_KANJI', response.data.data)
      })
    },

    speakSentence (context, id) {
      return axios.get(`/sentence/play/${id}`)
    },

    setLevel (context, o) {
      context.commit('SET_LEVEL', o)
    },

    setTimer (context, ms) {
      context.commit('SET_TIMER', ms)
    },

    reset (context) {
      context.commit('RESET')
    }
  },

  mutations: {
    LOAD_LANGUAGES (state, languages) {
      state.languages = languages
    },

    SET_LANGUAGE (state, o) {
      state.language = o
    },

    LOAD_LEVELS (state, levels) {
      state.levels = levels
    },

    SET_LEVEL (state, o) {
      state.level = o
    },

    SET_TIMER (state, ms) {
      state.timer = ms
    },

    LOAD_SENTENCES (state, sentences) {
      state.sentences = sentences
    },

    ADD_KANJI (state, o) {
      state.kanjis.push(o)
    },

    RESET (state) {
      state.sentences = []
    }

  },
  namespaced: true
}
