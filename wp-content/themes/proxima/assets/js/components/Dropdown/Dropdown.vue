<template>
  <div class="vp-dropdown">
    <div class="vp-dropdown--value" @click="isOpen = !isOpen">
      <template v-if="selected">
        <img v-show="selected.icon" :src="selected.icon">
        {{ selected.value }}

        <div class="vp-dropdown--value-arr" :class="{'active': isOpen}">
          <vp-icon type="arrow-down"></vp-icon>
        </div>
      </template>
    </div>
    <div class="vp-dropdown--menu" v-show="isOpen">
      <div class="vp-dropdown--menu-inner">
        <div class="vp-dropdown--menu-item" @click="select(item)" v-for="item in list">
            <img v-show="item.icon" :src="item.icon">
          {{ item.value }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Button",
  props: ['list'],
  data(){
    return {
      selected: false,
      isOpen: false
    }
  },
  mounted (){
    let self = this

    if(self.list.length > 0){
      self.select(self.list[0])
    }

    window.addEventListener('click', function (e){
      if(!e.target.closest('.vp-dropdown')){
        self.isOpen = false
      }
    })
  },
  methods: {
    select(item){
      this.selected = item
      this.isOpen = false
      this.$emit('select', item)
    }
  }
}
</script>

<style lang="scss" scoped>

</style>