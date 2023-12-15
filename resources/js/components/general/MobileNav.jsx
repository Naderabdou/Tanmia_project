// import { Drawer } from "@material-tailwind/react";
import React from "react";
import { Link } from "react-router-dom";
import englishLogo from "../../assets/united-states.png";
import searchIcon from "../../assets/search.png";
import menu from "../../assets/menu.png";
import MobileLanguageSelector from "./MobileLanguageSelector";
import { HashLink } from "react-router-hash-link";

function MobileNav() {
  return (
    <div className="block md:hidden drawer drawer-end">
      <input id="my-drawer-4" type="checkbox" className="drawer-toggle" />

      <div className="drawer-content">
        {/* Page content here */}
        <label htmlFor="my-drawer-4" className="flex justify-end">
          <img src={menu} className="w-10 invert"></img>
        </label>
      </div>
      <div className="drawer-side top-0 left-0 z-[99] overflow-hidden">
        <label
          id="drawer-label"
          htmlFor="my-drawer-4"
          aria-label="close sidebar"
          className=" drawer-overlay"
        ></label>
        <div className="z-50 flex flex-col items-center justify-between min-h-full p-4 bg-white menu w-80 text-base-content">
          <div
            dir="rtl"
            className="flex gap-4 items-center p-2 px-4 mb-4 border bg-[#ddd] rounded-full "
          >
            <img src={searchIcon} className="" width={20} height={20} />
            <input
              type="text"
              placeholder="ابحث..."
              className="w-full h-6 text-lg bg-transparent focus:outline-none "
            />
          </div>
          <MobileLanguageSelector />
          <div className="flex flex-col items-center justify-center grow">
            <div className="flex flex-col items-center justify-center h-full gap-4 text-2xl font-cairo">
              <Link
                to={"/about"}
                onClick={() => document.getElementById("drawer-label").click()}
                className="pb-1 text-center border-b border-gold w-60"
              >
                عن الجمعية
              </Link>
              <Link
                to={"/news"}
                onClick={() => document.getElementById("drawer-label").click()}
                className="pb-1 text-center border-b border-gold w-60"
              >
                أخبار الجمعية
              </Link>
              <Link
                to={"/news"}
                onClick={() => document.getElementById("drawer-label").click()}
                className="pb-1 text-center border-b border-gold w-60"
              >
                الفيديوهات{" "}
              </Link>
              <Link
                to={"/operationals"}
                onClick={() => document.getElementById("drawer-label").click()}
                className="pb-1 text-center border-b border-gold w-60"
              >
                النشاط التشغيلي
              </Link>
              <Link
                to={"/programs"}
                onClick={() => document.getElementById("drawer-label").click()}
                className="pb-1 text-center border-b border-gold w-60"
              >
                المشاريع والبرامج
              </Link>
              <HashLink
                onClick={() => document.getElementById("drawer-label").click()}
                to="/#contact_us"
                className="pb-1 text-center border-b border-gold w-60"
              >
                تواصل معنا
              </HashLink>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default MobileNav;

{
  /* <button className="md:hidden" onClick={openDrawer}>
        <img src={menu} className="w-10"></img>
      </button>
      <Drawer
        className="flex flex-col items-center justify-between w-screen p-4"
        open={open}
        onClose={closeDrawer}
      >
        
      </Drawer> */
}
