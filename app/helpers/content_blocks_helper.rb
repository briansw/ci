module ContentBlocksHelper

  def css_class(cb)
    cb.class.to_s.underscore.dasherize
  end

  def css_id(cb, selector = '')
    "#{selector}#{css_class(cb)}-#{cb.id}"
  end

end