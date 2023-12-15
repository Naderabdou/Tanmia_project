import { Link } from "react-router-dom";
import "./App.css";
import Carousel from "./components/Home/Carousel";
import donation from "./assets/donation.jpg";
import email from "./assets/email.png";
import mailbox from "./assets/mailbox.png";
import fax from "./assets/fax.png";
import telephone from "./assets/telephone.png";
import consult from "./assets/consult.jpg";
import community from "./assets/community.jpg";
import news from "./assets/news.jpg";
import food from "./assets/food.jpg";
import vod from "./assets/vod.mp4";
import children from "./assets/children.jpg";
import ContactForm from "./components/Home/ContactForm";
import VidPlayer from "./components/general/VidPlayer";
import { HashLink } from "react-router-hash-link";
const newsPlaceholder = [
  {
    date: "5 ديسمبر 2023",
    title: "النشأة",
    description: `
      أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
      الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
      الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
      التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
      الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة
      يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في
      الحقوق واللقب الثاني ادارة المنظّمات.
    `,
    newsId: "report",
  },
  {
    date: "5 ديسمبر 2023",
    title: "النشأة",
    description: `
أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة
يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في
الحقوق واللقب الثاني ادارة المنظّمات.
`,
    newsId: "report",
  },
  {
    date: "5 ديسمبر 2023",
    title: "النشأة",
    description: `
أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة
يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في
الحقوق واللقب الثاني ادارة المنظّمات.
`,
    newsId: "report",
  },
];
const programsPlaceholder = [
  {
    title: "مشروع التشغيل",
    description:
      "تسعى الجمعية من خلاله لتفعيل مراكز تشغيل ومنح امتيازات لاستقطاب مشغلين لتوفير فرص عمل لشريحة العاطلين عن العمل.  ",
    newsId: "report",
  },
  {
    title: "دورات للبالغين",
    description:
      "دورات تعليمية للبالغين، في علم الحاسوب، اللغات، وغيرها،  تساهم في تخطي العقبات للدخول لسوق العمل.",
    newsId: "report",
  },
  {
    title: "دورات للأطفال",
    description:
      "دورات لا منهجية للاطفال، رسم،  شطرنج، وغيرها، تساهم بتعزيز ثقة الأطفال بأنفسهم وانفتاحهم للبيئة المحيطة. ",
    newsId: "report",
  },
];
function App() {

  return (
    <>
      <Carousel
        imgs={[donation, consult]}
        carouselId={"homePageCarousel"}
        classNameCarousel={"w-full h-[300px] md:h-[400px]"}
        classNameForImage={"w-full"}
      />
      <div className="flex flex-wrap items-center justify-center h-full gap-4 p-2 text-2xl md:hidden font-cairo ">
        <Link
          to={"/about"}
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          عن الجمعية
        </Link>
        <Link
          to={"/news"}
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          أخبار الجمعية
        </Link>
        <Link
          to={"/videos"}
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          الفيديوهات{" "}
        </Link>
        <Link
          to={"/operationals"}
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          النشاط التشغيلي
        </Link>
        <Link
          to={"/programs"}
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          المشاريع والبرامج
        </Link>
        <HashLink
          to="/#contact_us"
          className="min-w-[45%] grow-[2] p-2 pb-1 text-center border border-gold"
        >
          تواصل معنا
        </HashLink>
      </div>
      <div id="news" className="p-4 md:px-8">
        <Link to="/news">
          <h2 className="mt-2 text-3xl font-bold hover:text-orange-800 text-brown-700 font-cairo">
            أخر الأخبار{" "}
          </h2>
        </Link>
        <div className="grid gap-4 mt-4 text-xl md:grid-cols-2">
          <img
            className="rounded-lg md:hidden grow"
            src={community}
            alt="community image"
          />
          <div>
            <Link to="/report" className=" hover:text-orange-800">
              <h2 className="pb-2 text-4xl border-b border-gold w-fit">
                تم إنشاء المنظمة
              </h2>
            </Link>
            <p className="mt-3 text-2xl md:mt-4">
              أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
              الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
              الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
              التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
              الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق
              دراوشة يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب
              الأول في الحقوق واللقب الثاني ادارة المنظّمات.
            </p>
            <div className="flex justify-center gap-2 p-2 md:gap-8">
              <Link
                to="news/2"
                className="p-2 py-4 text-center border rounded-lg md:w-40 hover:bg-orange-500 hover:text-white border-gold"
              >
                قراءة الخبر
              </Link>
              <Link
                to="news"
                className="p-2 py-4 text-center border rounded-lg md:w-40 hover:bg-orange-500 hover:text-white border-gold"
              >
                المزيد من الأخبار
              </Link>
            </div>
          </div>
          <img
            className="hidden rounded-lg md:inline grow"
            src={news}
            alt="news image"
          />
        </div>
      </div>
      <hr />
      <div id="about" className="p-4 md:px-8">
        <Link to="/about">
          <h2 className="mt-2 text-3xl font-bold hover:text-orange-800 text-brown-700 font-cairo">
            عن الجمعية
          </h2>
        </Link>
        <div className="grid gap-4 mt-4 text-xl md:grid-cols-2">
          <img
            className="rounded-lg md:hidden grow"
            src={community}
            alt="community image"
          />
          <p className="text-2xl md:mt-4">
            أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
            الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
            الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
            التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
            الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة
            يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في
            الحقوق واللقب الثاني ادارة المنظّمات.
          </p>
          <img
            className="hidden rounded-lg md:inline grow"
            src={community}
            alt="community image"
          />
        </div>
      </div>
      <hr />
      <div id="videos" className="p-4 md:px-8">
        <h2 className="mt-2 text-3xl font-bold text-brown-700 font-cairo">
          الفيديوهات{" "}
        </h2>
        <div className="flex flex-col items-center">
          <VidPlayer vod={vod}></VidPlayer>
          {/* <h3 className="mt-3 text-2xl font-bold">فيديو تجريبي</h3> */}
        </div>
      </div>
      <hr />
      <div className="p-4 md:px-8">
        <h2 className="mt-2 text-3xl font-bold text-brown-700 font-cairo">
          النشاط التشغيلي{" "}
        </h2>
        <div className="grid gap-4 mt-4 text-xl md:grid-cols-2">
          <img
            className="rounded-lg grow"
            src={children}
            alt="children image"
          />
          <div className="text-xl md:mt-4">
            تهدف جمعية "تنمية" من خلال نشاطها التشغيلي إلى احداث تغييرات إيجابية
            ملموسة في مجتمعنا العربي وتحقيق التنمية المستدامة فيه. وينقسم النشاط
            التشغيلي للمنظمة الى عدة أقسام:
            <ul className="px-4 py-2 list-disc list-outside">
              <li>
                اقامة مشاريع استثنائية لاستقطاب المشغلين من خلال خطط عمل تحفيزية
                وتوفير الوظائف للشرائح الموجودة ضمن دائرة البطالة.
              </li>
              <li>
                اقامة دورات تعليمية لتمكين ودعم طبقات وشرائح مختلفة من أبناء
                مجتمعنا تساهم في ادخالهم لسوق العمل، وبالتالي خفض نسبة البطالة
                في المجتمع العربي.
              </li>
              <li>
                {" "}
                اقامة فعاليات ثقافية واجتماعية، لدعم المستوى الثقافي في المجتمع
                العربي لمحاربة الآفات السلبية في مجتمعنا.
              </li>
              <li>
                {" "}
                اقامة دورات مختلفة لشريحة الأطفال وتهيئة البيئة والظروف الملائمة
                لهذه الشريحة، دعما لمستقبل مجتمعنا.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr />
      <div id="programs" className="p-4 md:px-8">
        <h2 className="mt-2 text-3xl font-bold text-brown-700 font-cairo">
          اخر المشاريع والبرامج
        </h2>
        <div className="grid gap-4 mt-4 text-xl md:grid-cols-2">
          <img
            className="rounded-lg md:hidden grow"
            src={community}
            alt="community image"
          />
          <div>
            <Link to="/program" className=" hover:text-orange-800">
              <h2 className="pb-2 text-4xl border-b border-gold w-fit">
                مشروع التشغيل{" "}
              </h2>
            </Link>
            <p className="mt-3 text-2xl md:mt-4">
              أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
              الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
              الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال
              التشغيل ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا
              الى تحسين مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق
              دراوشة يشغل منصب المدير العام لجمعية "تنمية"، وهو حاصل على اللقب
              الأول في الحقوق واللقب الثاني ادارة المنظّمات.
            </p>
          </div>
          <img
            className="hidden rounded-lg md:inline grow"
            src={food}
            alt="food image"
          />
        </div>
      </div>
      <hr />

      <div name="contact_us" id="contact_us" className="p-4 md:px-8">
        <h2 className="mt-2 text-3xl font-bold text-brown-700 font-cairo">
          للتواصل
        </h2>
        <div className="md:grid md:grid-cols-2">
          <div className="flex flex-col items-center content-start justify-center gap-5 mt-4 md:grid md:grid-cols-2 ">
            <div className="grow">
              <h4 className="flex items-center gap-2 p-2 text-2xl font-bold border-b-2 border-gold w-fit">
                الهاتف{" "}
                <img src={telephone} className="w-5" alt="telephone icon" />
              </h4>
              <div className="text-xl">046665811</div>
            </div>
            <div className="grow">
              <h4 className="flex items-center gap-2 p-2 text-2xl font-bold border-b-2 border-gold w-fit">
                الفاكس <img src={fax} className="w-5" alt="fax icon" />
              </h4>{" "}
              <div className="text-xl">046665810</div>
            </div>
            <div className="grow">
              <h4 className="flex items-center gap-2 p-2 text-2xl font-bold border-b-2 border-gold w-fit ">
                البريد الإلكتروني{" "}
                <img src={email} className="w-5" alt="email icon" />
              </h4>
              <a
                href="mailto:afd@gmail.com"
                className="block mt-2 text-xl hover:text-blue-800"
              >
                1948.afd@gmail.com
              </a>
            </div>
            <div className="mb-2 grow">
              <h4 className="flex items-center gap-2 p-2 mx-auto text-2xl font-bold text-center border-b-2 md:mx-0 border-gold w-fit">
                صندوق بريد{" "}
                <img src={mailbox} className="w-5" alt="mailbox icon" />
              </h4>
              <div className="text-xl">
                اكسال، الرمز البريدي 1692000، صندوق رقم 3333
              </div>
            </div>
          </div>
          <ContactForm />
        </div>
      </div>
    </>
  );
}

export default App;
