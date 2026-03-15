const footerLinks = {
  Services: [
    { label: 'Marketing Strategy', href: '#services' },
    { label: 'Communication', href: '#services' },
    { label: 'Branding & Design', href: '#services' },
    { label: 'Digital Content', href: '#services' },
    { label: 'Podcast & Video', href: '#services' },
    { label: 'Agency Support', href: '#services' },
  ],
  Company: [
    { label: 'About us', href: '#why-digik' },
    { label: 'Our process', href: '#process' },
    { label: 'Work', href: '#work' },
    { label: 'Contact', href: '#contact' },
  ],
  Shop: [
    { label: 'All products', href: '/shop' },
    { label: 'Templates', href: '/shop' },
    { label: 'Strategy kits', href: '/shop' },
    { label: 'Bundles', href: '/shop' },
  ],
}

const social = [
  { label: 'Instagram', href: '#', abbr: 'IG' },
  { label: 'LinkedIn', href: '#', abbr: 'LI' },
  { label: 'X / Twitter', href: '#', abbr: 'X' },
]

export default function Footer() {
  const year = new Date().getFullYear()

  return (
    <footer className="bg-ink-soft border-t border-white/10">
      <div className="container-site py-16">
        {/* Main footer grid */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-10 lg:gap-16 mb-16">
          {/* Brand col */}
          <div className="col-span-2 md:col-span-1">
            <a href="#" className="inline-flex items-center gap-0.5 mb-4">
              <span className="font-display text-2xl font-semibold text-white">Digi</span>
              <span className="font-display text-2xl font-semibold text-accent">K</span>
            </a>
            <p className="text-white/40 text-sm leading-relaxed mb-6 max-w-xs">
              Digital marketing and communication agency for brands that want
              to grow with clarity, creativity, and strategy.
            </p>
            <div className="flex items-center gap-3">
              {social.map((s) => (
                <a
                  key={s.label}
                  href={s.href}
                  aria-label={s.label}
                  className="w-8 h-8 border border-white/15 flex items-center justify-center text-white/40 text-xs hover:border-accent hover:text-accent transition-colors duration-200"
                >
                  {s.abbr}
                </a>
              ))}
            </div>
          </div>

          {/* Link columns */}
          {Object.entries(footerLinks).map(([group, links]) => (
            <div key={group}>
              <h4 className="text-white text-xs font-medium tracking-widest uppercase mb-5">
                {group}
              </h4>
              <ul className="space-y-3">
                {links.map((link) => (
                  <li key={link.label}>
                    <a
                      href={link.href}
                      className="text-white/40 text-sm hover:text-white/80 transition-colors duration-200"
                    >
                      {link.label}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        {/* Bottom bar */}
        <div className="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
          <p className="text-white/25 text-xs tracking-wide">
            © {year} Digi K. All rights reserved.
          </p>
          <div className="flex items-center gap-6">
            <a href="#" className="text-white/25 text-xs hover:text-white/60 transition-colors">
              Privacy policy
            </a>
            <a href="#" className="text-white/25 text-xs hover:text-white/60 transition-colors">
              Terms of use
            </a>
          </div>
        </div>
      </div>
    </footer>
  )
}
