module CoursesHelper

  def section_bug(resource)
    content_tag(:span, content_tag(:span, resource.section.first, class: 'letter'), class: "bug #{section_class(resource)}")
  end

  def section_class(resource)
    resource.section.parameterize
  end


end