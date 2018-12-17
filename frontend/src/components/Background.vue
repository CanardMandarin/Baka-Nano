<template>
  <div class="background">
    <div class="background__gradient1" :style="{background: background}">
    </div>
    <div class="background__gradient2">
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      // colors: [
      //   [230, 105, 147],
      //   [58, 164, 178],
      //   [40, 26, 88],
      //   [232, 24, 122]
      // ],
      colors: [
        [123, 31, 62],
        [14, 95, 110],
        [23, 14, 52],
        [134, 5, 66]
      ],
      step: 0,
      colorIndices: [0, 1, 2, 3],
      gradientSpeed: 0.020,
      background: ''
    }
  },
  methods: {
    // updateGradient () {
    //   let c00 = this.colors[this.colorIndices[0]]
    //   let c01 = this.colors[this.colorIndices[1]]
    //   let c10 = this.colors[this.colorIndices[2]]
    //   let c11 = this.colors[this.colorIndices[3]]

    //   let istep = 1 - this.step
    //   let r1 = Math.round(istep * c00[0] + this.step * c01[0])
    //   let g1 = Math.round(istep * c00[1] + this.step * c01[1])
    //   let b1 = Math.round(istep * c00[2] + this.step * c01[2])
    //   let color1 = '#' + ((r1 << 16) | (g1 << 8) | b1).toString(16)

    //   let r2 = Math.round(istep * c10[0] + this.step * c11[0])
    //   let g2 = Math.round(istep * c10[1] + this.step * c11[1])
    //   let b2 = Math.round(istep * c10[2] + this.step * c11[2])
    //   let color2 = '#' + ((r2 << 16) | (g2 << 8) | b2).toString(16)

    //   this.background = '-webkit-radial-gradient(80% 10%, circle, ' + color1 + ', transparent), -webkit-radial-gradient(80% 50%, circle, ' + color2 + ', transparent)'
    //   // $('#gradient').css({background: '-webkit-radial-gradient(80% 10%, circle, '+color1+', transparent), -webkit-radial-gradient(80% 50%, circle, '+color2+', transparent)'})

    //   this.step += this.gradientSpeed
    //   if (this.step >= 1) {
    //     this.step %= 1
    //     this.colorIndices[0] = this.colorIndices[1]
    //     this.colorIndices[2] = this.colorIndices[3]

    //     // pick two new target color indices
    //     // do not pick the same as the current one
    //     this.colorIndices[1] = (this.colorIndices[1] + Math.floor(1 + Math.random() * (this.colors.length - 1))) % this.colors.length
    //     this.colorIndices[3] = (this.colorIndices[3] + Math.floor(1 + Math.random() * (this.colors.length - 1))) % this.colors.length
    //   }
    // }
  },
  mounted () {
    // this.updateGradient()
    // setInterval(this.updateGradient, 10000)
  }
}
</script>

<style lang="scss" rel="stylesheet/sass">
  .background {
    position: fixed;
    height: 100vh;
    width: 100vw;
    padding: 0px;
    margin: 0px;
    z-index: 1;

    &__gradient1 {
      position: absolute;
      width: 100%;
      height: 100%;
      padding: 0px;
      margin: 0px;
      z-index: 10;
    }

    &__gradient2 {
      position: absolute;
      width: 100%;
      height: 100%;
      padding: 0px;
      margin: 0px;
      z-index: 3;
      // background-image:-webkit-radial-gradient(80% 10%, circle, rgb(27,186,135), transparent),
      //  -webkit-radial-gradient(80% 50%, circle, rgb(58,164,178), transparent),
      //  -webkit-radial-gradient(20% 80%, 40em 40em, rgb(14,4,56), transparent),
      //  -webkit-radial-gradient(10% 10%, circle, rgb(68,242,215), transparent);
      // background-image: -webkit-radial-gradient(80% 10%, circle, #020202, transparent), -webkit-radial-gradient(80% 50%, circle, #2c4448, transparent), -webkit-radial-gradient(20% 80%, 40em 40em, #0e0438, transparent), -webkit-radial-gradient(10% 10%, circle, #1b6056, transparent);
    }

  }
</style>
