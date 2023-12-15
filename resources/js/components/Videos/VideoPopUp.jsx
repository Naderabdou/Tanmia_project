import React, { useState } from "react";
import ReactPlayer from "react-player";
import play from "../../assets/play.png";

function VideoPopUp({ src }) {
  const [playing, setPlaying] = useState(false);

  return (
    <dialog id="my_modal_2" className="modal">
      <div className="relative modal-box">
        <ReactPlayer
          url={src}
          playing={playing}
          controls={playing}
          onPause={() => setPlaying(false)}
          onSeek={() => setPlaying(true)}
          width="100%"
          height="100%"
          style={{}}
        />
        {!playing && (
          <button
            onClick={() => setPlaying(true)}
            className="absolute w-10 -translate-x-1/2 -translate-y-1/2 invert md:w-20 top-1/2 left-1/2"
          >
            <img src={play} />
          </button>
        )}{" "}
      </div>
      <form method="dialog" className="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
  );
}

export default VideoPopUp;
