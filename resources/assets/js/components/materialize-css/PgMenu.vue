<template>
    <nav role="navigation" class="z-depth-3" >
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <slot></slot>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <slot></slot>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">{{ mobileIcon }}</i></a>
        </div>
    </nav>
</template> 

<script>

export default {
    props: {
        mobileIcon: {
          type: String,
          required: true
        }
    },

    ready() {
        // Use Jquery selector instead og this.$els because Materialize sideNav function is a Jquery plugin
        $(".button-collapse").sideNav();
    },
}

</script>