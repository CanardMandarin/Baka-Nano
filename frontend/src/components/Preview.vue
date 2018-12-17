<template>
  <aside class="preview" :class="{'active': active}">
    <a @click="hidePreview()" class="close"><b-icon size="is-medium" icon="close"></b-icon></a>
    <div class="preview__container">
      <ul>
        <li v-for="level in levels" :key="level.id">
          <p>{{level.name}} :
            <span v-for="kanji in level.kanji" :key="kanji.id">
              {{kanji.kanji}}
            </span>
          </p>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import _                          from 'underscore'

export default {
  data () {
    return {}
  },
  computed: {
    levels () {
      return _.filter(this.levelPreview, (l) => {
        return this.levelSelected.includes(l.number)
      })
    },
    ...mapGetters('app', {
      levelSelected: 'getLevelSelected',
      levelPreview: 'getLevelPreview',
      active: 'isPreviewShowed'
    })
  },
  methods: {
    ...mapActions('app', ['showPreview', 'hidePreview'])
  },
  created () {
    this.hidePreview()
  },
  mounted () {
    if (this.levelSelected.length === 0) this.hidePreview()
  }
}
</script>

<style lang="scss" rel="stylesheet/sass">
  .preview {
    position: fixed;
    left: 0;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    width: 16rem;
    padding: 3rem 1rem;
    background: #f5f5f5;
    z-index: 120;
    height: 100vh;
    transition: transform 300ms ease-in-out;
    transform: translateX(-100%);
    overflow-y: scroll;

    &.active {
      transform: none;
    }

    .close {
      cursor: pointer;
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
    }
  }
</style>
