<template>
  <aside class="sidebar" :class="{'active': active}">
    <a @click="hideSidebar()" class="close"><b-icon size="is-medium" icon="close"></b-icon></a>
    <div class="sidebar__container">
      <div class="sidebar__switcher">
        <a @click="switchPanel('levels')">Levels</a>
        <a @click="switchPanel('options')">Options</a>
      </div>
      <div v-if="panel === 'levels'" class="sidebar__panel">
        <ul class="sidebar__levels">
          <li v-for="i in levels" :key="i" @click="toggle(i)"><span :class="{'active': isActive(i)}">{{i}}</span></li>
        </ul>
      </div>
      <div v-if="panel === 'options'" class="sidebar__panel">
        <b-field label="Timer (s)">
            <b-input
                type="search"
                icon="clock"
                v-model="timer">
            </b-input>
        </b-field>
        <b-field label="Always show furigana">
            <b-checkbox v-model="furigana">
                {{ furigana ? 'yes' : 'no' }}
            </b-checkbox>
        </b-field>
      </div>
    </div>
  </aside>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import _                          from 'underscore'

export default {
  data () {
    return {
      panel: 'levels',
      levels: 50
    }
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
    furigana: {
      get () {
        return this.showFurigana
      },
      set (v) {
        this.setFurigana(v)
      }
    },
    ...mapGetters('app', {
      levelSelected: 'getLevelSelected',
      leveLoaded: 'getleveLoaded',
      active: 'isSidebarShowed',
      getTimer: 'getTimer',
      showFurigana: 'showFurigana'
    })
  },
  methods: {
    toggle (i) {
      this.toggleLevel(i)
      if (this.leveLoaded.length !== 0) this.loadLevels()
    },
    isActive (i) {
      return _.contains(this.levelSelected, i)
    },
    switchPanel (p) {
      this.panel = p
    },
    ...mapActions('app', ['toggleLevel', 'reset', 'showSidebar', 'hideSidebar', 'setTimer', 'setFurigana', 'loadLevels'])
  },
  created () {
    this.hideSidebar()
  },

  mounted () {
    setTimeout(this.showSidebar, 2000)
  }
}
</script>

<style lang="scss" rel="stylesheet/sass">
  .sidebar {
    position: fixed;
    right: 0;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    width: 16rem;
    padding: 3rem 1rem;
    background: #f5f5f5;
    z-index: 120;
    height: 100vh;
    transition: transform 300ms ease-in-out;
    transform: translateX(100%);

    &.active {
      transform: none;
    }

    &__switcher {
      margin-top: 20px;
      display: flex;

      a {
        flex:1;
        display: inline-block;
        text-align:center;
        border: 1px solid #000000;
        border-radius: 4px;
        margin: 0px 10px;
        cursor: pointer;
      }
    }

    &__panel {
      margin-top: 20px;

      ul {
        list-style: none;
      }

      ul.sidebar__levels {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;

        li {
          flex: 1 0 16.6%;
          text-align: center;
          margin-top: 10px;
          cursor: pointer;

          span {
            display: inline-block;
            border: 1px solid #000000;
            height: 25px;
            width: 25px;
            line-height: 25px;

            &.active {
              background: #000000;
              color: #ffffff;
            }
          }
        }
      }
    }

    .close {
      cursor: pointer;
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 18px;
    }
  }
</style>
