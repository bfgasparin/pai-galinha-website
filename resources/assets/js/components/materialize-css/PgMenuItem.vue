<template>
    <li>
    	<a href="{{ url ? url : '#' }}">
    		<slot></slot>
    	</a>
    </li>
</template> 

<script>

export default {
    props: ['url']
}

</script>