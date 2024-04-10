<template>
  <transition name="wbp-modal">
    <div class="wbp-modal">
      <div class="wbp-modal-mask" @click="$emit('close')"></div>
      <div class="wbp-modal-wrapper">
        <div class="wbp-modal-container">

          <div class="wbp-modal-header">
            <slot name="header">

            </slot>
          </div>

          <div class="wbp-modal-body">
            <slot name="body">

            </slot>
          </div>

          <div class="wbp-modal-footer">
            <slot name="footer">

            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "Dialog"
}
</script>

<style scoped>

</style>