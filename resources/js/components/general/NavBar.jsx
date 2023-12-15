import { Link } from "react-router-dom";
import downArrow from "../../assets/down-arrow.png";
import { HashLink } from "react-router-hash-link";
import fetchWrapper from "../../utils/fetchWrapper";
function NavBar() {
  fetchWrapper("/about_us");
  return (
    <div className="hidden font-cairo md:flex justify-center gap-4 text-xl shadow-md bg-[#f1f1f1]">
      <div className="w-36 group">
        <div className="w-40 h-2 transition-all duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <Link
          to={"/about"}
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          عن الجمعية <img src={downArrow} className="w-4 h-4" />
        </Link>
        <div className=" bg-white z-50 grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 overflow-hidden  absolute ">
          <div className="flex flex-col w-40 overflow-hidden">
            <Link to={"/about/us"} className="p-2 hover:text-orange-900">
              النشأة
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link className="p-2 hover:text-orange-900" to={"/about/us"}>
              عن الجمعية
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link
              className="p-2 hover:text-orange-900"
              to={"/about/operations"}
            >
              المكتب التنفيذي
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link className="p-2 hover:text-orange-900" to={"/about/members"}>
              أعضاء الجمعية
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link
              className="p-2 hover:text-orange-900"
              to={"/about/programs-director"}
            >
              مدراء البرامج
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link
              className="p-2 hover:text-orange-900"
              to={"/about/contact_us"}
            >
              تواصل معنا
            </Link>
          </div>
        </div>
      </div>
      <div className="w-32 group">
        <div className="w-32 h-2 transition-all duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <Link
          to={"/videos"}
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          الفيديوهات
        </Link>
      </div>
      <div className="w-40 group">
        <div className="w-40 h-2 transition-all duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <Link
          to="/news"
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          أخبار الجمعية <img src={downArrow} className="w-4 h-4" />
        </Link>
        <div className=" bg-white z-50 grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 overflow-hidden  absolute ">
          <div className="flex flex-col w-40 overflow-hidden">
            <Link to={"/news/1"} className="p-2 hover:text-orange-900">
              الخبر الأول
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/news/2"} className="p-2 hover:text-orange-900">
              الخبر الثاني{" "}
            </Link>
          </div>
        </div>
      </div>
      <div className="w-48 group">
        <div className="h-2 transition-all duration-300 opacity-0 bg-gold w-52 group-hover:opacity-100"></div>
        <Link
          to="/operationals"
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          النشاط التشغيلي <img src={downArrow} className="w-4 h-4" />
        </Link>
        <div className=" bg-white z-50 grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 overflow-hidden  absolute ">
          <div className="flex flex-col overflow-hidden w-52">
            <Link to={"/operationals/1"} className="p-2 hover:text-orange-900">
              1
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/operationals/2"} className="p-2 hover:text-orange-900">
              2{" "}
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/operationals/3"} className="p-2 hover:text-orange-900">
              3{" "}
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/operationals/4"} className="p-2 hover:text-orange-900">
              4{" "}
            </Link>
          </div>
        </div>
      </div>
      <div className="w-48 group">
        <div className="w-48 h-2 transition-all duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <Link
          to="/programs"
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          المشاريع والبرامج <img src={downArrow} className="w-4 h-4" />
        </Link>
        <div className=" bg-white z-50 grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-300 overflow-hidden  absolute ">
          <div className="flex flex-col w-48 overflow-hidden">
            <Link to={"/programs/1"} className="p-2 hover:text-orange-900">
              المشروع الأول
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/programs/2"} className="p-2 hover:text-orange-900">
              المشروع الثاني
            </Link>
            <hr className="text-gold bg-gold border-gold" />
            <Link to={"/programs/3"} className="p-2 hover:text-orange-900">
              المشروع الثالث
            </Link>
          </div>
        </div>
      </div>
      <div className="w-40 group">
        <div className="w-40 h-2 transition-all duration-300 opacity-0 bg-gold group-hover:opacity-100"></div>
        <HashLink
          to="/#contact_us"
          className="flex items-center gap-2 p-2 hover:text-orange-900 "
        >
          تواصل معنا
        </HashLink>
      </div>
    </div>
  );
}
export default NavBar;
