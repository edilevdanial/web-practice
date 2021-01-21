Vue.component("modal", {
    template: "#modal-template",
    methods: {
        close(event) {
            this.$emit('close');
        },
    },
});

var app = new Vue({
    el: "#app",
    data: {
        num: null,
        showSignUp: false,
        showLogIn: false,
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
        },
        slide: function () {
            let counter = 1
            setInterval(function () {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 4) {
                    counter = 1
                }
            }, 4000)
        }
    },
    methods: {
        add: function () {
            this.num++;
        },
        minus: function () {
            this.num--;
        },
        showModal() {
            this.showSignUp = true;
        },
        closeModal() {
            this.showSignUp = false;
        }
    }
});

