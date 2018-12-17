<template>
  <div class="wrap">
    <div class="loading">
      <div class="title">Loading</div>
      <div class="bounceball"></div>
      <div class="bounceball"></div>
      <div class="bounceball"></div>
      <div class="subtitle">It can take sometimes, depending on the number of levels you selected.</div>
    </div>
  </div>
</template>

<script>
export default { }
</script>
<style lang="scss" rel="stylesheet/sass">
  $width: 20px;
  $height: 20px;

  $bounce_height: 40px;

  body {
    position: relative;
    width: 100%;
    height: 100vh;
    font-family: Montserrat;
  }

  .wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .subtitle {
    color: #ffffff;
  }

  .title {
    color: #03a9f4;
    display: inline-block;
    margin-left: 5px;
    font-size: 5em;
    font-weight: 700;
    text-shadow: 0.03em 0.03em #f4f4f4, 0.05em 0.05em rgba(0, 0, 0, 0.2);
  }

  .bounceball {
    position: relative;
    display: inline-block;
    height: 37px;
    width: $width;
    &:before {
      position: absolute;
      content: '';
      display: block;
      bottom: 0;
      width: $width;

      top: $bounce_height;
      height: 5px;
      border-radius: 60px 60px 20px 20px;
      transform: scaleX(2);

      background-color: #03a9f4;
      transform-origin: 50%;
      animation: bounce 500ms alternate infinite ease;
    }

    &:nth-child(1) {
      &:before {
        animation-delay: -400ms;
      }
    }

    &:nth-child(2) {
      &:before {
        animation-delay: -800ms;
      }
    }

    &:nth-child(3) {
      &:before {
        animation-delay: -1200ms;
      }
    }
  }

  @keyframes bounce {
    0% {
      top: $bounce_height;
      height: 5px;
      border-radius: 60px 60px 20px 20px;
      transform: scaleX(2);
    }
    35% {
      height: $height;
      border-radius: 50%;
      transform: scaleX(1);
    }
    100% {
      top: 0;
      height: $height;
      border-radius: 50%;
      transform: scaleX(1);
    }
  }
</style>
