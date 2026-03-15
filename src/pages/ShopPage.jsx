/**
 * ShopPage — standalone page structure for the Digi K digital product store.
 *
 * This component is ready to be wired up to React Router or any routing solution.
 * Products are currently static data; replace with API calls or a CMS integration
 * (e.g. Gumroad, Stripe, Shopify Storefront API, or a headless CMS) when ready.
 */

import { useState } from 'react'
import Navbar from '../components/Navbar'
import Footer from '../components/Footer'

const categories = ['All', 'Strategy', 'Branding', 'Content', 'Communication', 'Podcast', 'Bundle']

const allProducts = [
  {
    id: 1,
    category: 'Strategy',
    title: 'Marketing Strategy Toolkit',
    description: 'A complete framework to plan, execute, and measure your digital marketing strategy. Includes positioning canvas, channel planner, and 90-day roadmap templates.',
    price: 29,
    badge: 'Bestseller',
    icon: '◈',
    includes: ['Positioning canvas', '90-day roadmap', 'Channel selection guide', 'KPI tracker'],
  },
  {
    id: 2,
    category: 'Branding',
    title: 'Brand Identity Kit',
    description: 'Templates and frameworks for building a consistent brand: voice guide, color system, typography rules, and social media asset templates.',
    price: 39,
    badge: 'New',
    icon: '◉',
    includes: ['Brand voice guide', 'Visual identity system', 'Social media templates', 'Brand guidelines doc'],
  },
  {
    id: 3,
    category: 'Content',
    title: 'Content Planner Pro',
    description: '12-month editorial calendar with content pillars, post templates, a caption formula guide, and a repurposing workflow.',
    price: 19,
    badge: null,
    icon: '◇',
    includes: ['12-month calendar', 'Content pillar framework', '30 caption templates', 'Repurposing checklist'],
  },
  {
    id: 4,
    category: 'Communication',
    title: 'Communications Playbook',
    description: 'Messaging frameworks, press templates, stakeholder communication system, and a crisis communication checklist.',
    price: 34,
    badge: null,
    icon: '◎',
    includes: ['Messaging framework', 'Press release template', 'Stakeholder matrix', 'Crisis comms guide'],
  },
  {
    id: 5,
    category: 'Podcast',
    title: 'Podcast Launch Bundle',
    description: 'Everything to launch your podcast: episode planner, show notes template, promotion kit, and guest outreach scripts.',
    price: 24,
    badge: 'Popular',
    icon: '◐',
    includes: ['Episode planner', 'Show notes template', 'Guest outreach scripts', 'Promotion checklist'],
  },
  {
    id: 6,
    category: 'Bundle',
    title: 'Agency Starter Pack',
    description: 'A curated bundle of tools and templates for freelancers and agencies—onboarding kit, proposal template, client reporting, and project tracker.',
    price: 59,
    badge: 'Bundle',
    icon: '◆',
    includes: ['Client onboarding kit', 'Proposal template', 'Reporting dashboard', 'Project tracker'],
  },
  {
    id: 7,
    category: 'Strategy',
    title: 'Social Media Audit Guide',
    description: 'A step-by-step framework to audit any social media presence: performance benchmarks, content gap analysis, and improvement roadmap.',
    price: 14,
    badge: null,
    icon: '◌',
    includes: ['Audit framework', 'Benchmark sheet', 'Gap analysis template', 'Action plan'],
  },
  {
    id: 8,
    category: 'Content',
    title: 'Email Marketing Kit',
    description: 'Complete email marketing resource: sequence templates, subject line formulas, segmentation guide, and A/B testing tracker.',
    price: 22,
    badge: null,
    icon: '◍',
    includes: ['5 email sequences', 'Subject line swipe file', 'Segmentation guide', 'A/B tracker'],
  },
]

export default function ShopPage() {
  const [activeCategory, setActiveCategory] = useState('All')
  const [sortBy, setSortBy] = useState('default')

  const filtered = allProducts
    .filter((p) => activeCategory === 'All' || p.category === activeCategory)
    .sort((a, b) => {
      if (sortBy === 'price-asc') return a.price - b.price
      if (sortBy === 'price-desc') return b.price - a.price
      return 0
    })

  return (
    <div className="min-h-screen bg-paper">
      <Navbar />

      {/* Shop hero */}
      <section className="pt-36 pb-16 bg-ink">
        <div className="container-site">
          <span className="label-tag" style={{ color: '#C8A96E' }}>
            Digital products
          </span>
          <h1
            className="font-display text-white font-semibold leading-tight mt-2 mb-4"
            style={{ fontSize: 'clamp(2.4rem, 5vw, 4rem)' }}
          >
            The Digi K Shop.
          </h1>
          <p className="text-white/50 text-lg max-w-xl leading-relaxed">
            Premium templates, frameworks, and strategic resources for marketers,
            agencies, entrepreneurs, and communicators.
          </p>
        </div>
      </section>

      {/* Filters */}
      <section className="sticky top-0 z-40 bg-paper border-b border-border-line">
        <div className="container-site py-4">
          <div className="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            {/* Category filters */}
            <div className="flex flex-wrap gap-2">
              {categories.map((cat) => (
                <button
                  key={cat}
                  onClick={() => setActiveCategory(cat)}
                  className={`text-xs font-medium px-4 py-2 tracking-wide transition-colors duration-200 ${
                    activeCategory === cat
                      ? 'bg-ink text-paper'
                      : 'border border-border-line text-muted hover:border-ink hover:text-ink'
                  }`}
                >
                  {cat}
                </button>
              ))}
            </div>

            {/* Sort */}
            <select
              value={sortBy}
              onChange={(e) => setSortBy(e.target.value)}
              className="text-xs font-medium border border-border-line text-muted px-3 py-2 bg-transparent focus:outline-none focus:border-ink"
            >
              <option value="default">Sort: Featured</option>
              <option value="price-asc">Price: Low to High</option>
              <option value="price-desc">Price: High to Low</option>
            </select>
          </div>
        </div>
      </section>

      {/* Products */}
      <section className="section-pad">
        <div className="container-site">
          {filtered.length === 0 ? (
            <div className="text-center py-20 text-muted">No products in this category yet.</div>
          ) : (
            <div className="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
              {filtered.map((product) => (
                <div
                  key={product.id}
                  className="card-product flex flex-col group cursor-pointer"
                >
                  {/* Product card header */}
                  <div className="bg-paper-warm p-7 border-b border-border-line flex items-center justify-between">
                    <div className="w-12 h-12 border border-border-line flex items-center justify-center text-accent text-2xl group-hover:border-accent transition-colors">
                      {product.icon}
                    </div>
                    <div className="flex flex-col items-end gap-1">
                      {product.badge && (
                        <span className="text-xs px-2 py-0.5 bg-accent/15 text-accent-dark font-medium">
                          {product.badge}
                        </span>
                      )}
                      <span className="text-xs text-muted tracking-wide uppercase">{product.category}</span>
                    </div>
                  </div>

                  {/* Product body */}
                  <div className="p-7 flex flex-col flex-1">
                    <h3 className="font-medium text-ink text-base mb-3 leading-snug group-hover:text-accent transition-colors duration-200">
                      {product.title}
                    </h3>
                    <p className="text-muted text-xs leading-relaxed mb-5 flex-1">
                      {product.description}
                    </p>

                    {/* Includes */}
                    <div className="mb-6">
                      <div className="text-xs text-muted uppercase tracking-wide mb-2">Includes</div>
                      <ul className="space-y-1">
                        {product.includes.map((item) => (
                          <li key={item} className="flex items-center gap-2 text-xs text-ink/70">
                            <span className="w-1 h-1 rounded-full bg-accent flex-shrink-0" />
                            {item}
                          </li>
                        ))}
                      </ul>
                    </div>

                    {/* Price & buy */}
                    <div className="flex items-center justify-between pt-4 border-t border-border-line">
                      <span className="font-display text-xl text-ink">${product.price}</span>
                      <button className="btn-primary py-2 px-5 text-xs">
                        Buy now
                      </button>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          )}
        </div>
      </section>

      {/* Shop CTA banner */}
      <section className="bg-paper-warm border-y border-border-line py-16">
        <div className="container-site text-center">
          <h3 className="font-display text-2xl font-semibold text-ink mb-3">
            Looking for something custom?
          </h3>
          <p className="text-muted text-sm mb-8 max-w-md mx-auto">
            We create bespoke toolkits, templates, and resources for businesses,
            agencies, and niches not covered by our off-the-shelf products.
          </p>
          <a href="#contact" className="btn-primary">
            Request a custom resource
          </a>
        </div>
      </section>

      <Footer />
    </div>
  )
}
