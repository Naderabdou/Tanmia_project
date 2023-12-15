import React from "react";

import classNames from "classnames";
import { useEffect, useState } from "react";
import { twMerge } from "tailwind-merge";

const goToOtherImage = (href, carouselId) => {
  const carousel = document.getElementById(carouselId);
  if (carousel) {
    const target = document.querySelector(href);
    const left = target.offsetLeft;
    carousel.scrollTo({ left: left });
  }
};
export default function DaisyUICarousel({
  imgs,
  carouselId,
  classNameCarousel,
  classNameForImage,
  isAutoPlay = true,
  autoPlayMilliseconds = 5000,
}) {
  const [activeIndex, setActiveIndex] = useState(0);
  const handleClickBtn = (event, i) => {
    event.preventDefault();
    const btn = event.currentTarget;
    const href = btn.getAttribute("href");
    goToOtherImage(href, carouselId);
    setActiveIndex(i);
  };

  useEffect(() => {
    if (isAutoPlay) {
      const intervalId = setInterval(() => {
        const newActiveIndex =
          activeIndex + 1 === imgs.length ? 0 : activeIndex + 1;
        goToOtherImage(`#DaisyUICarousel_img_${newActiveIndex}`, carouselId);
        setActiveIndex(newActiveIndex);
      }, autoPlayMilliseconds);
      return () => clearInterval(intervalId);
    }
  }, [activeIndex, autoPlayMilliseconds, carouselId, imgs.length, isAutoPlay]);
  return (
    <div dir="ltr" className="relative z-40">
      <div
        id={carouselId}
        className={classNames("carousel z-40", classNameCarousel)}
      >
        {imgs.map((img, i) => {
          return (
            <div
              key={`DaisyUICarousel_img_${i}`}
              id={`DaisyUICarousel_img_${i}`}
              className={twMerge(
                "carousel-item w-full z-40 bg-center bg-cover bg-no-repeat",
                classNameForImage
              )}
              style={{
                backgroundImage: `url(${img})`,
              }}
            ></div>
          );
        })}
      </div>
      <div className="absolute z-40 flex justify-center w-full gap-2 py-2 bottom-3">
        {imgs.map((img, i) => {
          return (
            <a
              onClick={(e) => handleClickBtn(e, i)}
              key={`DaisyUICarousel_img_point_${i}`}
              href={`#DaisyUICarousel_img_${i}`}
              className={classNames(
                activeIndex !== i && " opacity-30",
                "btn btn-xs btn-circle !h-4  !w-6"
              )}
            ></a>
          );
        })}
      </div>
    </div>
  );
}
