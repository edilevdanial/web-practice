var app = new Vue({
    el: "#app",
    data: {
        num: null,
    },
    computed: {
        countKg: function () {
            return this.num * 0.453592;
        },
        countG: function () {
            return this.num * 453.592;
        },
        countOunc: function () {
            return this.num * 16;
        }
    },
    methods: {
        add: function () {
            this.num++;
        },
        minus: function () {
            this.num--;
        }
    }
});

