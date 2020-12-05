<template>
    <b-carousel
        :autoplay="false"
        with-carousel-list
        :indicator="false"
        :overlay="gallery"
        @click="switchGallery(true)">
        <b-carousel-item v-for="(item, i) in items" :key="i">
            <figure class="image">
                <img :src="item.image">
            </figure>
        </b-carousel-item>
        <span v-if="gallery" @click="switchGallery(false)" class="modal-close is-large"/>
        <template slot="list" slot-scope="props">
            <b-carousel-list
                v-model="props.active"
                :data="items"
                v-bind="al"
                @switch="props.switch($event, false)"
                as-indicator />
        </template>
        <template slot="overlay">
            <div class="has-text-centered has-text-white">
                Hello i'am overlay!
            </div>
        </template>
    </b-carousel>
</template>

<script>
export default {
    data() {
        return {
            gallery: false,
            al: {
                hasGrayscale: true,
                itemsToShow: 2,
                breakpoints: {
                    768: {
                        hasGrayscale: false,
                        itemsToShow: 4
                    },
                    960: {
                        hasGrayscale: true,
                        itemsToShow: 6
                    }
                }
            },
            items: [
                {
                    title: 'Slide 1',
                    image: 'https://picsum.photos/1230/500?random=1'
                },
                {
                    title: 'Slide 2',
                    image: 'https://picsum.photos/1230/500?random=2'
                },
                {
                    title: 'Slide 3',
                    image: 'https://picsum.photos/1230/500?random=3'
                },
                {
                    title: 'Slide 4',
                    image: 'https://picsum.photos/1230/500?random=4'
                },
                {
                    title: 'Slide 5',
                    image: 'https://picsum.photos/1230/500?random=5'
                },
                {
                    title: 'Slide 6',
                    image: 'https://picsum.photos/1230/500?random=6'
                },
                {
                    title: 'Slide 7',
                    image: 'https://picsum.photos/1230/500?random=7'
                },
                {
                    title: 'Slide 8',
                    image: 'https://picsum.photos/1230/500?random=8'
                }
            ]
        }
    },
    methods: {
        switchGallery(value) {
            this.gallery = value
            if (value) {
                document.documentElement.classList.add('is-clipped')
            } else {
                document.documentElement.classList.remove('is-clipped')
            }
        }
    }
}
</script>
