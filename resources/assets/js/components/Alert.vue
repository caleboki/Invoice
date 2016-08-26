<template>
	<div class="Alert">
		<slot></slot>
	</div>
</template>

<script>
	export default {
	
	}
</script>

<style>

	.Alert {
		padding: 10px;
		position: relative;
	}
	
	.Alert--info {
		background: #e3e3e3;
	}
</style>