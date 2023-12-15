import { Link } from "react-router-dom";
import downArrow from "../../assets/down-arrow.png";

function MobileLanguageSelector() {
  return (
    <div className=" dropdown !w-full flex justify-center flex-col items-center dropdown-bottom">
      <div
        tabIndex={0}
        role="button"
        className="flex items-center justify-between w-1/2 gap-2 p-2 m-1 mx-auto border rounded-full border-gold "
      >
        اللغة العربية
        <img src={downArrow} className="w-4 h-4" />
      </div>
      <ul
        tabIndex={0}
        className="dropdown-content  z-[1] rounded-3xl mx-auto menu p-2 shadow  w-1/2"
      >
        <Link to={"/en-us"} className="flex items-center gap-2 p-2">
          English
        </Link>
        <hr className="text-gold bg-gold border-gold" />
        <Link to={"/en-us"} className="flex items-center gap-2 p-2">
          עברית
        </Link>
      </ul>
    </div>
  );
}

export default MobileLanguageSelector;
