<template>
    <a href="{{ link }}">
        <div class="col s12 m4 news" :class="{ 'z-depth-1' : hoverable, 'hoverable' : hoverable}" >
            <div class="icon-block">
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
</style>