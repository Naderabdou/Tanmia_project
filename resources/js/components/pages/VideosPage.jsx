import React, { useState } from "react";
import vod from "../../assets/vod.mp4";
import consult from "../../assets/consult.jpg";
import VideoThumbnail from "../Videos/VideoThumbnail";
import VideoPopUp from "../Videos/VideoPopUp";
function VideosPage() {
  const videos = [
    {
      src: vod,
      duration: 50,
      thumbnail: consult,
    },
    {
      src: vod,
      duration: 50,
      thumbnail: consult,
    },
    {
      src: vod,
      duration: 50,
      thumbnail: consult,
    },
    {
      src: vod,
      duration: 50,
      thumbnail: consult,
    },
  ];
  const [activeSrc, setActiveSrc] = useState("");
  const handleClick = () => {
    document.getElementById("my_modal_2").showModal();
  };
  return (
    <div className="flex flex-wrap justify-center gap-4">
      {videos.map((video) => (
        <VideoThumbnail
          {...video}
          handleClick={() => {
            handleClick();
            setActiveSrc(video.src);
          }}
        />
      ))}
      <VideoPopUp src={activeSrc} />
    </div>
  );
}

export default VideosPage;
