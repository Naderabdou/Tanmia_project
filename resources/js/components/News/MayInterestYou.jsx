import React from "react";
import food from "../../assets/food.jpg";
import { Link } from "react-router-dom";

function MayInterestYou({ id, link, title, description }) {
  return (
    <Link to={"/" + link + "/" + id}>
      <div className="relative overflow-hidden border shadow-md md:w-80 group rounded-xl">
        <div className="absolute w-full h-2 transition-opacity duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <img src={food} />
        <div className="p-1">
          <h1 className="text-xl">{title}</h1>
          <p className="p-2 text-base">{description} </p>
        </div>
      </div>
    </Link>
  );
}

export default MayInterestYou;
