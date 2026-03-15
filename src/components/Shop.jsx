import { useScrollReveal } from '../hooks/useScrollReveal'

const products = [
  {
    id: 1,
    category: 'Strategy',
    title: 'Marketing Strategy Toolkit',
    description: 'A complete framework to plan, execute, and measure your digital marketing strategy from scratch.',
    price: '$29',
    badge: 'Bestseller',
    icon: '◈',
  },
  {
    id: 2,
    category: 'Branding',
    title: 'Brand Identity Kit',
    description: 'Templates and guidelines for building a consistent brand across social, print, and digital channels.',
    price: '$39',
    badge: 'New',
    icon: '◉',
  },
  {
    id: 3,
    category: 'Content',
    title: 'Content Planner Pro',
    description: '12-month editorial calendar with content pillars, post templates, and a caption formula guide.',
    price: '$19',
    badge: null,
    icon: '◇',
  },
  {
    id: 4,
    category: 'Communication',
    title: 'Communications Playbook',
    description: 'Messaging frameworks, press templates, and a stakeholder communication system for growing teams.',
    price: '$34',
    badge: null,
    icon: '◎',
  },
  {
    id: 5,
    category: 'Podcast',
    title: 'Podcast Launch Bundle',
    description: 'Everything you need to launch: episode planner, show notes template, promotion kit, and guest outreach scripts.',
    price: '$24',
    badge: 'Popular',
    icon: '◐',
  },
  {
    id: 6,
    category: 'Bundle',
    title: 'Agency Starter Pack',
    description: 'A curated bundle of tools and templates for freelancers and agencies starting or scaling their practice.',
    price: '$59',
    badge: 'Bundle',
    icon: '◆',
  },
]

export default function Shop() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-ink" id="shop">
      <div className="container-site">
        {/* Section header */}
        <div className="reveal-item opacity-0 flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
          <div className="max-w-xl">
            <span className="inline-flex items-center gap-3 text-xs tracking-widest2 font-medium text-accent uppercase mb-4">
              <span className="w-8 h-px bg-accent" />
              Digital products
            </span>
            <h2 className="heading-display text-3xl md:text-4xl font-semibold text-white leading-tight mb-4">
              Tools built for marketers,
              by marketers.
            </h2>
            <p className="text-white/50 leading-relaxed">
              Premium templates, toolkits, and strategic resources designed to save
              you time, sharpen your work, and deliver better results—starting today.
            </p>
          </div>
          <a
            href="/shop"
            className="flex-shrink-0 inline-flex items-center gap-2 text-white/60 text-sm font-medium hover:text-accent transition-colors duration-200"
          >
            View full store
            <svg className="w-4 h-4" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>

        {/* Products grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
          {products.map((product, index) => (
            <div
              key={product.id}
              className="reveal-item opacity-0 relative bg-white/5 border border-white/10 p-7
                         hover:bg-white/8 hover:border-accent/40 transition-all duration-300 group cursor-pointer"
              style={{ transitionDelay: `${index * 80}ms` }}
            >
              {/* Badge */}
              {product.badge && (
                <div className="absolute top-5 right-5">
                  <span className="text-xs font-medium px-2 py-0.5 bg-accent/20 text-accent tracking-wide">
                    {product.badge}
                  </span>
                </div>
              )}

              {/* Icon & category */}
              <div className="flex items-center gap-3 mb-5">
                <div className="w-10 h-10 border border-white/15 flex items-center justify-center text-accent text-lg group-hover:border-accent/50 transition-colors">
                  {product.icon}
                </div>
                <span className="text-xs text-white/30 tracking-widest uppercase font-medium">
                  {product.category}
                </span>
              </div>

              <h3 className="text-white font-medium text-lg mb-3 leading-snug group-hover:text-accent transition-colors duration-200">
                {product.title}
              </h3>
              <p className="text-white/40 text-sm leading-relaxed mb-7">
                {product.description}
              </p>

              {/* Price & CTA */}
              <div className="flex items-center justify-between">
                <span className="font-display text-2xl text-white">{product.price}</span>
                <button className="text-xs font-medium text-accent border border-accent/30 px-4 py-2 hover:bg-accent hover:text-ink transition-all duration-200 tracking-wide">
                  Get it now
                </button>
              </div>
            </div>
          ))}
        </div>

        {/* Bottom banner */}
        <div className="reveal-item opacity-0 mt-12 border border-white/10 p-8 md:p-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
          <div>
            <div className="text-white font-medium text-lg mb-1">Can't find what you need?</div>
            <div className="text-white/40 text-sm">
              We create custom toolkits and resources tailored to your business or niche.
            </div>
          </div>
          <a
            href="#contact"
            className="flex-shrink-0 btn-accent"
          >
            Request custom resource
          </a>
        </div>
      </div>
    </section>
  )
}
