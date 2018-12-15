<script>
        swarmSend({
            command: "get",
            rid: "getCompetitions",
            params: {
                source: "betting",
                what: {
                    competition: []
                },
                where: {},
                subscribe: false
            }
        });
</script>