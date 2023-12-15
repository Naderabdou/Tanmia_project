import React from "react";
import { Link } from "react-router-dom";

function NewsItem({ img, link, title, date, description, id }) {
  return (
    <div className="grid shadow-md p-2 justify-center items-center md:items-stretch border rounded-lg overflow-hidden grid-cols-[30%,70%] gap-4">
      <div className="">
        <Link to={"/" + link + "/" + id}>
          <img src={img} className="h-auto" alt={title}></img>
        </Link>
      </div>
      <div>
        <Link to={"/" + link + "/" + id}>
          <h1 className="text-2xl font-bold hover:text-gray-500">{title}</h1>
        </Link>
        <h6 className="text-sm opacity-50">{date}</h6>
        <p className="md:h-24">
          {description.split(" ").slice(0, 24).join(" ")}...
        </p>
      </div>
    </div>
  );
}
export default NewsItem;
