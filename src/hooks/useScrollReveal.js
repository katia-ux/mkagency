import { useEffect, useRef } from 'react'

/**
 * Attaches an IntersectionObserver to the returned ref.
 * When the element enters the viewport, all children with
 * the class `reveal-item` animate in sequentially.
 */
export function useScrollReveal(threshold = 0.1) {
  const ref = useRef(null)

  useEffect(() => {
    const section = ref.current
    if (!section) return

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          const items = section.querySelectorAll('.reveal-item')
          items.forEach((item, i) => {
            const delay = parseFloat(item.style.transitionDelay || 0) * 1000 || i * 100
            setTimeout(() => {
              item.style.transition = 'opacity 0.7s ease-out, transform 0.7s ease-out'
              item.style.opacity = '1'
              item.style.transform = 'translateY(0)'
            }, delay)
          })
          // Pre-set transform so items slide up into place
          observer.unobserve(section)
        }
      },
      { threshold }
    )

    // Pre-set initial state
    const items = section.querySelectorAll('.reveal-item')
    items.forEach((item) => {
      item.style.opacity = '0'
      item.style.transform = 'translateY(20px)'
    })

    observer.observe(section)
    return () => observer.disconnect()
  }, [threshold])

  return ref
}
