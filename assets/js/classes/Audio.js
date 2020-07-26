class Audio {
    constructor() {

        this.current;
        this.audio = document.createElement('audio');


        this.setTrack = function (src) {

            this.audio.src = src;
        };


    }
}
