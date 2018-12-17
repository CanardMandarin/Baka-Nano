<template>
  <div @click="showSidebar()" class="sidebar-expander">
    <b-icon size="is-medium" icon="arrow-expand-left"></b-icon><span class="sidebar-expander__text">show sidebar</span>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  computed: {
    ...mapGetters('app', { active: 'isSidebarShowed' })
  },
  methods: {
    ...mapActions('app', ['toggleLevel', 'reset', 'showSidebar', 'hideSidebar'])
  }
}
</script>

<style lang="scss" rel="stylesheet/sass">
.sidebar-expander {
  position: fixed;
  right:0;
  top: 50%;
  transform: translate(74%, -50%);
  background: #f5f5f5;
  padding: 15px 10px 12px 15px;
  z-index: 110;
  color: #363636;
  cursor: pointer;
  transition: transform 300ms ease-in-out;

  span {
    margin-right: 10px;
    display: inline-block;
    vertical-align: middle;
    line-height: normal;
    font-size: 1.2em;
  }

  i:before {
    font-size: 30px;
  }

  &:hover {
    transform: translate(0%, -50%);
  }
}
</style>
