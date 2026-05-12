import { motion } from "motion/react";
import { Hammer, Home, MapPin, Menu, Phone, Mail, ChevronRight, CheckCircle2 } from "lucide-react";
import { useState } from "react";

export default function App() {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  const fadeIn = {
    initial: { opacity: 0, y: 20 },
    whileInView: { opacity: 1, y: 0 },
    viewport: { once: true, margin: "-100px" },
    transition: { duration: 0.8, ease: "easeOut" }
  };

  return (
    <div className="min-h-screen bg-[var(--color-primary-light)] font-sans text-text-main selection:bg-accent-green selection:text-white">
      {/* Navigation */}
      <header className="fixed top-0 left-0 right-0 z-50 bg-[#f5f2ed]/90 backdrop-blur-md border-b border-primary-brown/10">
        <div className="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
          <div className="text-2xl font-serif tracking-widest text-primary-brown">
            〇〇建築株式会社
          </div>
          
          {/* Desktop Nav */}
          <nav className="hidden md:flex items-center gap-10">
            <a href="#services" className="text-sm tracking-widest hover:text-accent-green transition-colors">事業概要</a>
            <a href="#company" className="text-sm tracking-widest hover:text-accent-green transition-colors">会社概要</a>
            <a href="#access" className="text-sm tracking-widest hover:text-accent-green transition-colors">アクセス</a>
            <a href="#contact" className="px-6 py-3 bg-primary-brown text-white text-sm tracking-widest hover:bg-accent-green transition-colors rounded-sm">
              無料で相談・資料請求
            </a>
          </nav>

          {/* Mobile Menu Toggle */}
          <button 
            className="md:hidden p-2 text-primary-brown"
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
          >
            <Menu size={24} />
          </button>
        </div>

        {/* Mobile Nav */}
        {isMobileMenuOpen && (
          <motion.nav 
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: "auto" }}
            className="md:hidden bg-primary-light border-b border-primary-brown/10 px-6 py-4 flex flex-col gap-4"
          >
            <a href="#services" onClick={() => setIsMobileMenuOpen(false)} className="py-2 tracking-widest">事業概要</a>
            <a href="#company" onClick={() => setIsMobileMenuOpen(false)} className="py-2 tracking-widest">会社概要</a>
            <a href="#access" onClick={() => setIsMobileMenuOpen(false)} className="py-2 tracking-widest">アクセス</a>
            <a href="#contact" onClick={() => setIsMobileMenuOpen(false)} className="py-3 mt-2 text-center bg-primary-brown text-white tracking-widest rounded-sm">
              無料で相談・資料請求
            </a>
          </motion.nav>
        )}
      </header>

      <main>
        {/* Hero Section */}
        <section className="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden px-6">
          <div className="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <motion.div 
              initial={{ opacity: 0, x: -30 }}
              animate={{ opacity: 1, x: 0 }}
              transition={{ duration: 1 }}
              className="relative z-10"
            >
              <h1 className="font-serif text-4xl md:text-5xl lg:text-6xl leading-[1.4] text-primary-brown mb-8 text-balance">
                心から安らげる、<br />木の香る家づくり。
              </h1>
              <p className="text-text-muted leading-relaxed mb-10 max-w-md text-sm md:text-base">
                創業40年、〇〇市と共に歩む。<br />
                職人の手仕事で、あなたの理想をカタチにします。
              </p>
              <div className="flex flex-col sm:flex-row gap-4">
                <a href="#contact" className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-accent-green text-white tracking-widest hover:bg-opacity-90 transition-all rounded-sm shadow-sm group">
                  無料で相談・資料請求
                  <ChevronRight size={18} className="group-hover:translate-x-1 transition-transform" />
                </a>
              </div>
            </motion.div>
            
            <motion.div 
              initial={{ opacity: 0, scale: 0.95 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ duration: 1.2, delay: 0.2 }}
              className="relative aspect-[4/5] md:aspect-square lg:aspect-[4/3] rounded-sm overflow-hidden shadow-2xl"
            >
              <img 
                src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" 
                alt="木の温もりを感じる家の中" 
                className="object-cover w-full h-full"
              />
              <div className="absolute inset-0 border border-black/10 rounded-sm"></div>
            </motion.div>
          </div>
        </section>

        {/* Services Section */}
        <section id="services" className="py-24 bg-white px-6">
          <div className="max-w-7xl mx-auto">
            <motion.div {...fadeIn} className="text-center mb-16">
              <span className="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Services</span>
              <h2 className="font-serif text-3xl md:text-4xl text-primary-brown">私たちができること</h2>
              <div className="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
            </motion.div>

            <div className="grid md:grid-cols-3 gap-8 lg:gap-12">
              <ServiceCard 
                delay={0}
                icon={<Home size={32} strokeWidth={1.5} />}
                title="注文住宅"
                desc="住むほどに愛着がわく、自然素材にこだわった家づくりをご提案します。"
                img="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80"
              />
              <ServiceCard 
                delay={0.2}
                icon={<Hammer size={32} strokeWidth={1.5} />}
                title="リノベーション"
                desc="受け継がれた想いはそのままに、現代の暮らしに合わせた快適な住空間へ再生します。"
                img="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?auto=format&fit=crop&w=800&q=80"
              />
              <ServiceCard 
                delay={0.4}
                icon={<CheckCircle2 size={32} strokeWidth={1.5} />}
                title="アフターメンテナンス"
                desc="建ててからが本当のお付き合い。地域密着だからこそできる迅速なサポート体制。"
                img="https://images.unsplash.com/photo-1504307651254-35680f356f11?auto=format&fit=crop&w=800&q=80"
              />
            </div>
          </div>
        </section>

        {/* Company Profile */}
        <section id="company" className="py-24 px-6 relative overflow-hidden">
          <div className="absolute top-0 right-0 w-1/2 h-full bg-primary-brown/5 -z-10 rounded-l-[100px] hidden md:block"></div>
          <div className="max-w-4xl mx-auto">
            <motion.div {...fadeIn} className="text-center mb-16">
              <span className="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Company</span>
              <h2 className="font-serif text-3xl md:text-4xl text-primary-brown">私たちについて</h2>
              <div className="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
            </motion.div>

            <motion.div {...fadeIn} className="bg-white p-8 md:p-12 rounded-sm shadow-xl shadow-black/5">
              <p className="font-serif text-xl md:text-2xl text-center leading-loose mb-12 text-primary-brown border-b border-primary-brown/10 pb-12">
                「一棟入魂」。<br />
                お客様の人生に寄り添い、<br />
                100年続く住まいを目指します。
              </p>

              <dl className="grid grid-cols-1 md:grid-cols-[160px_1fr] gap-x-8 gap-y-6 text-sm md:text-base">
                <dt className="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">会社名</dt>
                <dd className="font-medium text-primary-brown">〇〇建築株式会社</dd>
                
                <dt className="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">代表者</dt>
                <dd className="font-medium text-primary-brown">代表取締役 〇〇 太郎</dd>

                <dt className="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">所在地</dt>
                <dd className="font-medium text-primary-brown leading-relaxed flex flex-col gap-1">
                  <span>〒000-0000<br className="md:hidden"/> 〇〇県〇〇市〇〇 1-2-3</span>
                </dd>
              </dl>
            </motion.div>
          </div>
        </section>

        {/* Access Section */}
        <section id="access" className="py-24 bg-white px-6">
          <div className="max-w-5xl mx-auto">
            <motion.div {...fadeIn} className="text-center mb-16">
               <span className="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Access</span>
              <h2 className="font-serif text-3xl md:text-4xl text-primary-brown">アクセス</h2>
              <div className="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
            </motion.div>

            <motion.div {...fadeIn} className="grid md:grid-cols-[1fr_350px] gap-8 bg-primary-light/30 border border-primary-brown/10 p-4 rounded-sm">
              {/* Google Maps Dummy */}
              <div className="bg-gray-200 w-full min-h-[300px] md:h-full rounded relative flex justify-center items-center overflow-hidden">
                <div className="absolute inset-0 opacity-10" style={{
                  backgroundImage: "url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\"><rect width=\"20\" height=\"20\" fill=\"none\" stroke=\"%23000\" stroke-width=\"1\" opacity=\"0.5\"/></svg>')",
                  backgroundSize: "20px 20px"
                }}></div>
                 <div className="z-10 flex flex-col items-center text-text-muted/60">
                   <MapPin size={48} strokeWidth={1} />
                   <p className="mt-2 text-sm tracking-widest">Google Maps 埋め込みエリア</p>
                 </div>
              </div>

              <div className="flex flex-col justify-center p-6 bg-white rounded border border-primary-brown/5 shadow-sm">
                <h3 className="font-serif text-lg text-primary-brown mb-4">〇〇建築株式会社 本社</h3>
                <p className="text-sm text-text-muted leading-relaxed mb-6">
                  〒000-0000<br />
                  〇〇県〇〇市〇〇 1-2-3
                </p>
                <ul className="text-sm text-text-main space-y-3">
                  <li className="flex items-start gap-3">
                    <span className="text-accent-green mt-0.5">•</span>
                    <span><strong>最寄り駅：</strong><br/>〇〇駅より徒歩10分</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <span className="text-accent-green mt-0.5">•</span>
                    <span><strong>駐車場：</strong><br/>5台完備（無料）</span>
                  </li>
                </ul>
              </div>
            </motion.div>
          </div>
        </section>

        {/* Contact Form Section */}
        <section id="contact" className="py-24 bg-primary-brown px-6 text-primary-light">
          <div className="max-w-3xl mx-auto">
             <motion.div {...fadeIn} className="text-center mb-16">
              <span className="text-primary-light/60 text-xs font-bold tracking-[0.2em] uppercase block mb-3">Contact</span>
              <h2 className="font-serif text-3xl md:text-4xl text-primary-light">お問い合わせ・資料請求</h2>
              <div className="w-12 h-px bg-primary-light/30 mx-auto mt-6"></div>
              <p className="mt-8 text-primary-light/80 text-sm">家づくりに関するご相談から、資料請求までお気軽にお問い合わせください。</p>
            </motion.div>

            <motion.form {...fadeIn} className="bg-primary-light text-text-main p-8 md:p-12 rounded-sm shadow-xl" onSubmit={(e) => e.preventDefault()}>
              <div className="space-y-8">
                <div>
                  <label htmlFor="name" className="block text-sm font-bold tracking-widest mb-2">お名前 <span className="text-red-500 ml-1">*</span></label>
                  <input type="text" id="name" required className="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all" placeholder="山田 太郎" />
                </div>
                
                <div className="grid md:grid-cols-2 gap-8">
                  <div>
                    <label htmlFor="email" className="block text-sm font-bold tracking-widest mb-2">メールアドレス <span className="text-red-500 ml-1">*</span></label>
                    <input type="email" id="email" required className="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all" placeholder="example@test.com" />
                  </div>
                  <div>
                    <label htmlFor="phone" className="block text-sm font-bold tracking-widest mb-2">電話番号</label>
                    <input type="tel" id="phone" className="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all" placeholder="000-0000-0000" />
                  </div>
                </div>

                <div>
                  <label className="block text-sm font-bold tracking-widest mb-3">ご相談内容（複数選択可）</label>
                  <div className="flex flex-wrap gap-6">
                    <label className="flex items-center gap-2 cursor-pointer group">
                      <input type="checkbox" className="w-4 h-4 text-accent-green border-gray-300 rounded focus:ring-accent-green" />
                      <span className="text-sm group-hover:text-accent-green transition-colors">新築・注文住宅</span>
                    </label>
                    <label className="flex items-center gap-2 cursor-pointer group">
                      <input type="checkbox" className="w-4 h-4 text-accent-green border-gray-300 rounded focus:ring-accent-green" />
                      <span className="text-sm group-hover:text-accent-green transition-colors">リフォーム・リノベーション</span>
                    </label>
                    <label className="flex items-center gap-2 cursor-pointer group">
                      <input type="checkbox" className="w-4 h-4 text-accent-green border-gray-300 rounded focus:ring-accent-green" />
                      <span className="text-sm group-hover:text-accent-green transition-colors">資料請求のみ</span>
                    </label>
                    <label className="flex items-center gap-2 cursor-pointer group">
                      <input type="checkbox" className="w-4 h-4 text-accent-green border-gray-300 rounded focus:ring-accent-green" />
                      <span className="text-sm group-hover:text-accent-green transition-colors">その他</span>
                    </label>
                  </div>
                </div>

                <div>
                  <label htmlFor="message" className="block text-sm font-bold tracking-widest mb-2">メッセージ本文 <span className="text-red-500 ml-1">*</span></label>
                  <textarea id="message" rows={5} required className="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all resize-y" placeholder="ご質問やご要望をご自由にお書きください。"></textarea>
                </div>

                <div className="pt-4 text-center">
                  <button type="submit" className="w-full md:w-auto px-16 py-4 bg-accent-green border border-accent-green text-white font-bold tracking-widest rounded-sm hover:bg-white hover:text-accent-green transition-all duration-300 shadow-lg shadow-accent-green/20">
                    送信する
                  </button>
                  <p className="mt-4 text-xs text-text-muted">※送信後、数日以内に担当者よりご返信いたします。</p>
                </div>
              </div>
            </motion.form>
          </div>
        </section>
      </main>

      <footer className="bg-[#4a3f36] text-primary-light/60 py-12 px-6 border-t border-white/5 text-center">
        <div className="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
          <div className="text-xl font-serif tracking-widest text-primary-light">
            〇〇建築株式会社
          </div>
          <div className="flex gap-6 text-sm">
             <span className="flex items-center gap-2"><Phone size={16} /> 000-0000-0000</span>
             <span className="flex items-center gap-2"><Mail size={16} /> info@example.com</span>
          </div>
        </div>
        <div className="mt-12 text-xs tracking-widest">
          &copy; 2026 〇〇 Construction All Rights Reserved.
        </div>
      </footer>
    </div>
  );
}

// Subcomponents

function ServiceCard({ icon, title, desc, img, delay }: { icon: React.ReactNode, title: string, desc: string, img: string, delay: number }) {
  return (
    <motion.div 
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true, margin: "-50px" }}
      transition={{ duration: 0.6, delay, ease: "easeOut" }}
      className="group"
    >
      <div className="aspect-[4/3] rounded-sm overflow-hidden mb-6 bg-primary-light relative">
        <img src={img} alt={title} className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
        <div className="absolute inset-0 bg-primary-brown/10 group-hover:bg-transparent transition-colors duration-500"></div>
      </div>
      <div className="flex items-center gap-4 mb-4 text-accent-green">
        <div className="p-3 bg-primary-light rounded-full text-primary-brown">
          {icon}
        </div>
        <h3 className="font-serif text-2xl text-primary-brown">{title}</h3>
      </div>
      <p className="text-sm text-text-muted leading-relaxed pl-16">
        {desc}
      </p>
    </motion.div>
  );
}
