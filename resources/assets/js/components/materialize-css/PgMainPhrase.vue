<template>
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">{{ content }}</h1>
                <div class="row center">
                   <h5 class="header col s12 light white-text">{{ subContent }}</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img :src="backgroundImg"></div>
    </div> 
</template> 

<script>

export default {
    props: {
        content: {
          type: String,
          required: true
        },
        backgroundImg: {
          type: String,
          required: true
        },
        subContent : String
    },

    ready() {
        // Use Jquery selector instead og this.$els because Materialize sideNav function is a Jquery plugin
        $('.parallax').parallax();
    },
}

</script>