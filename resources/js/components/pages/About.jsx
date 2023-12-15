import React from "react";
import AboutSections from "../About/AboutSections";
import { useParams } from "react-router-dom";
import food from "../../assets/food.jpg";

function About() {
  const { id } = useParams();
  return (
    <div className="flex flex-col md:grid grid-cols-[30%,auto] gap-4">
      <AboutSections></AboutSections>
      <div className="flex flex-col gap-4">
        <img src={food} />

        <h1 className="pb-2 text-2xl font-bold border-b border-gold w-fit">
          {id?.toUpperCase() || "us".toUpperCase()}{" "}
        </h1>
        <p className="text-xl indent-4">
          أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
          الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
          الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال التشغيل
          ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا الى تحسين
          مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة يشغل منصب
          المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في الحقوق واللقب
          الثاني ادارة المنظّمات.
        </p>
      </div>
    </div>
  );
}

export default About;
