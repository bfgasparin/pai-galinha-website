<template>
    <div>
        <div v-if="title && stared" style="" class="teal stared" id="{{ id }}">
            <div class="valign-wrapper wrapper-star">
                <h3 class="valign white-text center-align star-title">{{ title }}</h3>
            </div>
        </div> 
        <div class="container">
            <h2 v-if="title && !stared" class="center brown-text" >{{ title }}</h2>
            <div class="section">
                <div class="row">
                    <slot></slot>
                </div>
            </div>
        </div> 
    </div>  
</template> 

<script>

import ParticlesJs from 'particles.js';

export default {
    props: {
        id: {
            type: String,
            required: true
        },
        stared: Boolean,
        staredConfig: String,
        title : String
    },
    ready() {
        if (this.stared) {
            particlesJS.load(this.id, this.staredConfig, function() {
              console.log('callback - particles.js config loaded');
            });
        }
    }
}

</script>

<style type="scss">
    .stared {
        height: 20rem; 
    } 

    .wrapper-star {
        position: absolute; 
        width: 100%; 
        height: inherit;
    }

    .star-title {
        padding-top: 8rem;  
        width: inherit; 
        height: inherit;
    }
</style>