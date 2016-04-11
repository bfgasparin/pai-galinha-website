<template>
    <a href="{{ link }}">
        <div class="news" :class="{ 'z-depth-1' : hoverable, 'hoverable' : hoverable}" >
            <div class="icon-block content">
                  <h3 class="center brown-text"><i class="material-icons">{{ icon }}</i></h3>
                  <h5 class="center">{{ title }}</h5>
                  <p class="light center"> {{ description }}</p>
            </div>
        </div>
    </a>

</template> 

<script>
export default {
    props: {
        link: {
          type: String,
          required: true
        },
        icon: {
          type: String,
          required: true
        },
        title: {
          type: String,
          required: true
        },
        description : String,
        hoverable : Boolean
    },
}
</script>

<style type="scss">
    .news {
        position: relative; 
        color: #000;
    } 
    .content {
        padding: 0.1rem 1rem;
    }     
</style>