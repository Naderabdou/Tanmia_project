import React from "react";
import children from "../../assets/children.jpg";
import { Link } from "react-router-dom";
import Header from "../general/Header";

function NotFound() {
  return (
    <>
      <Header>
        <div className="flex flex-col items-center gap-4">
          <div className="overflow-hidden rounded-lg ">
            <img src={children} />
          </div>
          <h3 className="text-3xl">هذه الصفحة غير موجودة</h3>
          <Link to={"/"} className="p-2 px-8 border rounded-full bg-gold">
            إذهب للصفحة الرئيسية
          </Link>
        </div>
      </Header>
    </>
  );
}

export default NotFound;
