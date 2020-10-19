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
                show: false,
                username: "",
                message: ""
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
                info: []
            },
            ltd: {
                show: false,
                info: []
            },
            mentions: {
                show: false,
                mentioncount: 0
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>