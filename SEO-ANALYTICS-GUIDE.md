# Commerce Lab SEO & Analytics Guide

## Overview
This document outlines the SEO and Google Analytics 4 (GA4) implementation for the Commerce Lab website. It serves as a reference for maintaining and enhancing the site's search visibility and analytics tracking.

## SEO Implementation

### Key Files
- **robots.txt**: Controls search engine crawling behavior
- **sitemap.xml**: Maps all important pages for search engines
- **index.php**: Contains meta tags, schema markup, and core SEO elements

### Meta Tags
The site implements comprehensive meta tags including:
- Title tags optimized for keywords
- Meta descriptions with clear value propositions
- Open Graph tags for social media sharing
- Twitter Card tags for Twitter sharing
- Canonical tags to prevent duplicate content issues

### Schema.org Structured Data
Two primary schema implementations:
1. **EducationalOrganization**: Identifies Commerce Lab as an educational entity
2. **LocalBusiness**: Provides location and business-specific information

### Content Optimization
- Keywords naturally integrated throughout content
- Semantic HTML5 elements for better content structure
- Descriptive alt attributes for images

## Google Analytics 4 Implementation

### Base Configuration
- GA4 property ID: G-GVEN6YSYRN
- Enhanced measurement enabled
- User properties configured

### Custom Events
The site tracks the following custom events:

| Event Name | Description | Parameters |
|------------|-------------|------------|
| booking_initiated | User starts booking process | event_category, event_label, content_type |
| booking_completed | User completes booking | event_category, event_label, content_type, conversion, value |
| service_view | User views service details | service_name, service_id, content_type |
| tab_select | User selects a tab | tab_id, tab_name, content_type |
| form_submit | User submits a form | form_id, form_name |
| form_submit_success | Form submission successful | form_id, form_name |
| form_submit_error | Form submission failed | form_id, form_name, error_message |
| calendar_widget_load | Calendar widget loads | widget_type, content_type |

### Conversion Tracking
- Form submissions
- Booking completions 
- Key page views

### E-commerce Tracking
Enhanced e-commerce tracking is enabled for:
- Program/service view events
- Add to cart actions
- Purchase completion

## Maintenance Guidelines

### Regular SEO Maintenance
1. Update sitemap.xml with new pages and current dates (at least quarterly)
2. Review meta tags for opportunities to enhance CTR
3. Keep schema markup up-to-date with business changes
4. Monitor Google Search Console for issues

### Analytics Maintenance
1. Regularly review GA4 reports for insights
2. Check that custom events are firing correctly
3. Update event tracking as new features are added
4. Ensure conversion tracking remains accurate

## Best Practices

### SEO
- Always update metadata when creating new pages
- Keep URLs clean, descriptive and SEO-friendly
- Ensure mobile responsiveness as it affects rankings
- Regularly create quality content to improve organic visibility

### Analytics
- Document all custom events and their parameters
- Set clear goals in GA4 to track conversion rates
- Connect GA4 with Google Search Console for deeper insights
- Create custom reports for key business metrics

## Resources
- [Google Analytics 4 Documentation](https://developers.google.com/analytics/devguides/collection/ga4)
- [Schema.org Reference](https://schema.org/)
- [Google Search Console](https://search.google.com/search-console/about)
- [Google PageSpeed Insights](https://pagespeed.web.dev/) 