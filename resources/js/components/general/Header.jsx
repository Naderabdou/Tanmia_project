import tanmyaLogo from "../../assets/tanmya logo.png";
import searchIcon from "../../assets/search.png";
import NavBar from "../../components/general/NavBar";
import MobileNav from "./MobileNav";
import LanguageSelector from "./LanguageSelector";
import { Outlet, useLocation } from "react-router-dom";
import { Link } from "react-router-dom";
import ScrollToTop from "./ScrollToTop";

// صغغر السيرش، ابعت الصفحات، زود حاجة حت اخر الاخبار، زود الاسم، غير صور السلايدر، شيل اسهم السلايدر، لون اللينكات علي البي سي
// اللغات، المنيو الداخلية تبقي موجودة موبايل بس

function Header({ children }) {
  const { pathname } = useLocation();
  console.log({ pathname });
  return (
    <>
      <header
        dir="rtl"
        data-theme="light"
        className="bg-gray-500 border-b border-gold font-amiri"
      >
        <div className="flex items-center py-2 pl-2 border-b md:flex-row md:justify-between md:items-center ">
          <div className="grid md:flex items-center justify-between  grid-cols-[1fr,auto] grow">
            <Link to={"/"}>
              <div className="flex flex-col items-start justify-center px-2 grow">
                <img className="h-20" src={tanmyaLogo} alt="لوجو تنمية"></img>
                <h1 className="text-xl text-center text-white ">
                  جمعية التنمية بالشرق الأوسط
                </h1>
              </div>
            </Link>
            {/* <MobileNav /> */}
          </div>
          <LanguageSelector />
        </div>
        <NavBar />
      </header>
      <main dir="rtl" data-theme="light">
        <div
          className={`${
            pathname === "/" ? "" : "md:w-8/12 md:p-8 p-2"
          } min-h-screen  mx-auto font-amiri`}
        >
          <ScrollToTop />
          <Outlet />
          {children}
        </div>
      </main>
      <footer
        dir="rtl"
        className="flex justify-between p-4 text-white bg-gray-700"
      >
        <h5 className="text-lg md:text-xl">جميع الحقوق محفوظة© تنمية</h5>
        <h5>2023</h5>
      </footer>
    </>
  );
}

export default Header;
{
  /* <div className="items-center hidden gap-2 md:flex"> */
}
{
  /* removed the search bar */
}
{
  /* <div
              dir="rtl"
              className="flex gap-4 w-80 items-center p-1 px-4  border bg-[#ddd] rounded-full "
            >
              <img src={searchIcon} className="" width={20} height={20} />
              <input
                type="text"
                placeholder="ابحث..."
                className="h-8 text-lg bg-transparent focus:outline-none"
              />
            </div> */
}
{
  /* <div className="flex items-center p-2 border rounded-md border-gold">
            
            <input
              type="text"
              placeholder="ابحث..."
              className="bg-transparent w-44 focus:outline-none"
            />
            <img
              src={searchIcon}
              width={20}
              className="cursor-pointer invert"
            />
          </div> */
}
