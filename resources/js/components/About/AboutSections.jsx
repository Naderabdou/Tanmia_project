import React from "react";
import { Link, useParams } from "react-router-dom";

function AboutSections() {
  const { id } = useParams();
  return (
    <div className="flex flex-col border h-fit">
      <Link
        className={`p-2 text-xl border-b ${
          id === "us" || !id ? "bg-gold" : ""
        }`}
        to={"/about/us"}
      >
        عن الجمعية
      </Link>
      <Link
        className={`p-2 text-xl border-b ${
          id === "operations" ? "bg-gold" : ""
        }`}
        to={"/about/operations"}
      >
        المكتب التنفيذي
      </Link>
      <Link
        className={`p-2 text-xl border-b ${id === "members" ? "bg-gold" : ""}`}
        to={"/about/members"}
      >
        أعضاء الجمعية
      </Link>
      <Link
        className={`p-2 text-xl border-b ${
          id === "programs-director" ? "bg-gold" : ""
        }`}
        to={"/about/programs-director"}
      >
        مدراء البرامج
      </Link>
      <Link
        className={`p-2 text-xl border-b ${
          id === "contact_us" ? "bg-gold" : ""
        }`}
        to={"/about/contact_us"}
      >
        تواصل معنا
      </Link>
    </div>
  );
}

export default AboutSections;
