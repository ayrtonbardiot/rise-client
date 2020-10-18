<template>
    <div>

    </div>
</template>

<script>
    export default {
        name: 'InterfaceManager',
        props: {
            about: {
                show: false,
                onlineusers: 0,
                roomcount: 0,
                onlinetime: "",
                registered: 0
            },
            hotelalert: {
                show: false
            },
            event: {
                show: false,
                username: "",
                message: "",
                roomid: 0,
                recomp: ""
            },
            profile: {
                show: false,
                id: 1
            },
            ltd: {
                show: false,
                id: 0
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>