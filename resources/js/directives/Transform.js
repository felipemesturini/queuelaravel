import Vue from 'vue';

Vue.directive('rotate', {
    bind(el, binding, vnode) {
        console.log(el);
        let current = 0;
        el.addEventListener("dblclick", function () {
            let options = binding.value ?? {};
            // console.log(options)
            console.log(binding.arg)
            if (binding.modifiers.reverse) current-=options.angle;
            else current+=options.angle;
            // console.log(binding.modifiers);
            if (binding.modifiers.animate) el.style.transition = 'transform 0.5s';
            el.style.transform = `rotate(${current}deg)`;
        });
    }
});
