<template>
  <section class="home">
    <div class="container">
      <Title :title="'Baka nano ?!'" :topSubTitle="'バカなの'" />
      <div class="start">
        <a @click="start()">START</a>
      </div>
    </div>
  </section>
</template>

<script>
import Title                          from '@/components/Title'
import Package                        from '@/../package.json'

export default {
  metaInfo: {
    title: 'Baka nano ?! - Start'
  },
  components: {
    Title
  },
  data () {
    return {
      version: Package.version
    }
  },
  methods: {
    start () {
      this.$router.push({ path: '/config' })
    }
  }
}
</script>
<style lang="scss" rel="stylesheet/sass" scoped>
  @import "../assets/scss/variables";

  .home .container { transform: skewY(-10deg); flex-direction: column; }

  .start {
    transform: skewY(10deg);
  }

</style>
