import ReactPlayer from "react-player";
import React, { useState } from "react";
import play from "../../assets/play.png";

function VidPlayer({ vod }) {
  const [playing, setPlaying] = useState(false);
  return (
    <div className="relative flex justify-center gap-4 mt-4 text-xl">
        {/*  <ReactPlayer
        playing={playing}
        url={vod}
        controls={playing}
        onPause={() => setPlaying(false)}
        onSeek={() => setPlaying(true)}
        width="80%"
        height="100%"
        style={{}}
      />
        */}
      {!playing && (
        <button
          onClick={() => setPlaying(true)}
          className="absolute w-10 -translate-x-1/2 -translate-y-1/2 invert md:w-20 top-1/2 left-1/2"
        >
          <img src={play} />
        </button>
      )}
    </div>
  );
}

export default VidPlayer;
