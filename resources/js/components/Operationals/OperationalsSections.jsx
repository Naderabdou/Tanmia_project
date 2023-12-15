import React from "react";
import { Link, useParams } from "react-router-dom";

function OperationalsSections() {
  const { id } = useParams();
  return (
    <div className="flex flex-col border h-fit">
      <Link
        className={`p-2 text-xl border-b ${id == "1" || !id ? "bg-gold" : ""}`}
        to={"/operationals/1"}
      >
        1{" "}
      </Link>
      <Link
        className={`p-2 text-xl border-b ${id == "2" ? "bg-gold" : ""}`}
        to={"/operationals/2"}
      >
        2{" "}
      </Link>
      <Link
        className={`p-2 text-xl border-b ${id == "3" ? "bg-gold" : ""}`}
        to={"/operationals/3"}
      >
        3{" "}
      </Link>
      <Link
        className={`p-2 text-xl border-b ${id == "4" ? "bg-gold" : ""}`}
        to={"/operationals/4"}
      >
        4{" "}
      </Link>
    </div>
  );
}

export default OperationalsSections;
