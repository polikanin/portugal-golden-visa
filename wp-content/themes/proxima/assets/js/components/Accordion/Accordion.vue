<template>
    <div class="p-accordion">
        <button class="p-accordion--btn" @click.prevent="openTab(id)" :class="{active: isOpen}">
            {{name}}
            <p-icon type="arrow-down"></p-icon>
        </button>
        <div class="p-accordion--body" v-show="isOpen">
            <slot></slot>
        </div>
    </div>
</template>

<script>

export default {
    name: "Accordeon",
    props: ['name', 'id', 'show'],
    data(){
        return {
            isOpen: false,
        }
    },
    mounted() {
        if(this.show){
            this.isOpen = !!this.show
        }
    },
    computed: {

    },
    watch: {
        activeTab(){
            this.isOpen = false
        }
    },
    methods: {
        openTab(id){
            this.isOpen = !this.isOpen
        }
    }
}
</script>

<style scoped>

</style>