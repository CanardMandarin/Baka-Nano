<template>
  <div class="title">
    <h2 class="title__secondary title__secondary--left">{{topSubTitle}}</h2>
    <h1 class="title__primary">{{title}}</h1>
    <h2 class="title__secondary title__secondary--right">{{BottomSubTitle}}</h2>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    topSubTitle: String,
    BottomSubTitle: String
  }
}
</script>
<style lang="scss" rel="stylesheet/sass">
  @import "../assets/scss/variables";

  $light-accent: rgba(#000, 0.2);
  $lighter-accent: rgba(#000, 0.075);

  $animation-duration: 1.25s;
  $line-min-width: 3em;

  .title {
    margin: auto;
    color: $primary;
    &__primary,
    &__secondary {
      margin: 0 auto;
      white-space: nowrap;
    }

    &__primary {
      font-size: 5rem;
      font-weight: 700;
      text-transform: uppercase;
      text-shadow:
          .03em .03em $bg-color,
          .05em .05em $light-accent;
      animation: slide-from-left $animation-duration cubic-bezier(0.250, 0.460, 0.450, 0.940) both;

      @keyframes slide-from-left {
        0%   { transform: translateX(-6rem); }
        100% { transform: translateX(0); }
      }
    }

    &__secondary {
      font-size: 1.5rem;
      font-weight: 600;
      display: flex;
      align-items: center;

      &:before,
      &:after {
        content: '';
        display: block;
        height: 0.125em;
        background-color: $light-accent;
        animation-duration: $animation-duration;
        animation-timing-function: linear;
      }

      &:before { margin-right: 0.5em; }
      &:after  { margin-left:  0.5em; }

      &--left { justify-content: flex-end; }

      &--left:after,
      &--right:before {
        width: 100%;
        animation-name: scale-to-100-percent;

        @keyframes scale-to-100-percent {
          0%   { width: 0; }
          100% { width: 100%; }
        }
      }

      &--left:before,
      &--right:after {
        width: $line-min-width;
        animation-name: scale-to-line-min-width;

        @keyframes scale-to-line-min-width {
          0%   { width: 0; }
          100% { width: $line-min-width; }
        }
      }
    }
  }

  @media(max-width: 640px) {
    .title {
      &__primary   { font-size: 3.5rem; }
      &__secondary { font-size: 1.25rem; }
    }
  }

  @media(max-width: 420px) {
    .title {
      &__primary   { font-size: 2.5rem; }
      &__secondary { font-size: 1rem; }
    }
  }
</style>
