<template>
  <div id="app">
    <main>
      <router-view />
    </main>
    <Background />
  </div>
</template>

<script>
import Background           from '@/components/Background'

export default {
  name: 'App',
  metaInfo: {
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { name: 'description', content: 'Baka nano is a free online tool for practicing Japanese grammar and kanji through short sentences that are randomly displayed.' }
    ]
  },
  components: {
    Background
  }
}
</script>

<style lang="scss" rel="stylesheet/sass">
  @import "assets/scss/main.scss";
  @import "@mdi/font/css/materialdesignicons.css";
</style>
