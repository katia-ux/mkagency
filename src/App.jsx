import Navbar from './components/Navbar'
import Hero from './components/Hero'
import WhatWeDo from './components/WhatWeDo'
import Services from './components/Services'
import Shop from './components/Shop'
import WhyDigiK from './components/WhyDigiK'
import Process from './components/Process'
import Credibility from './components/Credibility'
import FinalCTA from './components/FinalCTA'
import Footer from './components/Footer'
import ShopPage from './pages/ShopPage'

const isShopPage =
  typeof window !== 'undefined' && window.location.pathname === '/shop'

export default function App() {
  if (isShopPage) {
    return <ShopPage />
  }

  return (
    <div className="overflow-x-hidden">
      <Navbar />
      <main>
        <Hero />
        <WhatWeDo />
        <Services />
        <Shop />
        <WhyDigiK />
        <Process />
        <Credibility />
        <FinalCTA />
      </main>
      <Footer />
    </div>
  )
}
