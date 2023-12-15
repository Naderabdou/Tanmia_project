import React from "react";
import play from "../../assets/play.png";

function VideoThumbnail({ src, thumbnail, duration, handleClick }) {
  return (
    <button
      onClick={() => handleClick(src)}
      dir="ltr"
      className="bg-[#aaa] relative w-80 h-60 rounded-lg overflow-hidden "
    >
      <img src={thumbnail} className="object-cover h-full" />
      <img
        src={play}
        className="absolute z-50 w-16 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 invert"
      />
      <p className="absolute bottom-2 left-2 px-3 py-1 text-sm bg-[#00000090] text-white rounded-lg">
        {parseInt(duration / 60)} : {duration % 60}
      </p>
    </button>
  );
}

export default VideoThumbnail;
