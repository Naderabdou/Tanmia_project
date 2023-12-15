import React from "react";
import { Link } from "react-router-dom";

function NewsComponents({ date, title, newsId, description }) {
  return (
    <div className="relative p-2 mt-4 border-t-2 border-gold w-80 md:mt-4 min-h-fit md:py-3">
      {date && <p className="text-sm text-brown-800">{date}</p>}
      <Link to={"/" + newsId} className="hover:text-gray-700">
        <h3 className="my-2 text-2xl font-bold">{title}</h3>
      </Link>
      <p className="text-lg text-gray-900">{description}</p>
    </div>
  );
}

export default NewsComponents;
